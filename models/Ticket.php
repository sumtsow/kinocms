<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tickets".
 *
 * @property int $id
 * @property int $place
 * @property double $cost
 * @property int $saled
 * @property string $created_at
 * @property string $updated_at
 * @property int $order_id
 * @property int $row_id
 * @property int $show_id
 *
 * @property Order $order
 * @property Row $row
 * @property Show $show
 */
class Ticket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tickets';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['place', 'cost', 'saled', 'order_id', 'row_id', 'show_id'], 'required'],
            [['place', 'saled', 'order_id', 'row_id', 'show_id'], 'integer'],
            [['cost'], 'number'],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['order_id' => 'id']],
            [['row_id'], 'exist', 'skipOnError' => true, 'targetClass' => Row::className(), 'targetAttribute' => ['row_id' => 'id']],
            [['show_id'], 'exist', 'skipOnError' => true, 'targetClass' => Show::className(), 'targetAttribute' => ['show_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'place' => 'Place',
            'cost' => 'Cost',
            'saled' => 'Saled',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'order_id' => 'Order ID',
            'row_id' => 'Row ID',
            'show_id' => 'Show ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRow()
    {
        return $this->hasOne(Row::className(), ['id' => 'row_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShow()
    {
        return $this->hasOne(Show::className(), ['id' => 'show_id']);
    }
}
