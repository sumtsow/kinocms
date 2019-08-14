<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use app\models\Order;

class User extends ActiveRecord implements IdentityInterface
{
    //public $id;
    //public $email;
    //public $password;
    //public $auth_key;
    public $access_token;

    public static function tableName()
    {
        return 'users';
    }
    
    /**
     * 
     * Unset hidden fields
     */
    public function fields()
    {
        $fields = parent::fields();

        unset($fields['auth_key'], $fields['password'], $fields['access_token']);

        return $fields;
    }
    
    /**
     * {@inheritdoc}
     */    
    public function extraFields()
    {
        return ['orders'];
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
     * {@inheritdoc}
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
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['user_id' => 'id']);
    }
    
    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($auth_key)
    {
        return $this->auth_key === $auth_key;
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
