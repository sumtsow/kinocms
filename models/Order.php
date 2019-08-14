<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string $state
 * @property string $expired_at
 * @property string $created_at
 * @property string $updated_at
 * @property int $user_id
 *
 * @property User $user
 * @property Ticket[] $tickets
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }
    
    /**
     * {@inheritdoc}
     */    
    public function extraFields()
    {
        return ['tickets'];
    }
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['state', 'user_id'], 'required'],
            [['state'], 'string'],
            [['user_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'state' => 'State',
            'expired_at' => 'Expired At',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTickets()
    {
        return $this->hasMany(Ticket::className(), ['order_id' => 'id']);
    }
}
