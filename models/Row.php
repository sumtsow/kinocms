<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rows".
 *
 * @property int $id
 * @property int $number
 * @property int $places_num
 * @property string $created_at
 * @property string $updated_at
 * @property int $hall_id
 *
 * @property Hall $hall
 * @property Ticket[] $tickets
 */
class Row extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rows';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'places_num', 'hall_id'], 'required'],
            [['number', 'places_num', 'hall_id'], 'integer'],
            [['hall_id'], 'exist', 'skipOnError' => true, 'targetClass' => Hall::className(), 'targetAttribute' => ['hall_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'places_num' => 'Places Num',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'hall_id' => 'Hall ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHall()
    {
        return $this->hasOne(Hall::className(), ['id' => 'hall_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTickets()
    {
        return $this->hasMany(Ticket::className(), ['row_id' => 'id']);
    }
}
