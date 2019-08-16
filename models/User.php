<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "Users".
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $accessToken
 * @property string $authKey
 */
class User extends ActiveRecord implements IdentityInterface
{

    /**
     *  password repeat for confirmation
     */
    public $password_repeat;
    
    /**
     * @return string $tableName
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @return array of Validator rules
     */
    public function rules()
    {
        return [
            [['email', 'password', 'password_repeat'], 'required'],
            [['email', 'password', 'password_repeat'], 'string', 'max' => 256],
            ['password', 'compare'],
        ];
    }
        
    /**
     * @param boolean $insert flag
     * @return boolean
     */    
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->generateAuthKey();
                $this->generateAccessToken();
                $this->hashPassword($this->password);
            }
            return true;
        }
        return false;
    }
    
    /**
     * find User by id
     * @param int $id
     * @return static|null
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @param $token User access token 
     * @param $type of  User accesstoken
     * @return User
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * Finds user by email
     *
     * @param string $email
     * @return static|null
     */
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return authKey
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
        
    /**
     * @return authKey
     */
    public function generateAuthKey()
    {
        return $this->__set('auth_key', \Yii::$app->security->generateRandomString());
    }    
    
    /**
     * @return accessToken
     */
    public function generateAccessToken()
    {
        return $this->__set('access_token', \Yii::$app->security->generateRandomString());
    }
    
    /**
     * Hash password
     *
     * @param string $password password to hash
     * @return true
     */
    public function hashPassword($password)
    {
        $this->password = Yii::$app->getSecurity()->generatePasswordHash($password);
        return true;
    }
    
    /**
     * @param integer $auth_key
     * @return boolean $isValid
     */
    public function validateAuthKey($auth_key)
    {
        return $this->auth_key === $auth_key;
    }
    
    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }
}
