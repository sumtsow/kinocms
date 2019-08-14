<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tickets".
 *
 * @property int $id
 * @property int $row
 * @property int $place
 * @property double $cost
 * @property string $state
 * @property string $reservation_expiration
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
            [['id', 'row', 'place', 'cost'], 'required'],
            [['id', 'row', 'place'], 'integer'],
            [['cost'], 'number'],
            [['state'], 'string'],
            [['reservation_expiration'], 'safe'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'row' => 'Row',
            'place' => 'Place',
            'cost' => 'Cost',
            'state' => 'State',
            'reservation_expiration' => 'Reservation Expiration',
        ];
    }
}
