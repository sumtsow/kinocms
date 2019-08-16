<?php

namespace app\models;


use yii\db\ActiveRecord;

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
class Ticket extends ActiveRecord
{
    
    /**
     *  @var integer Ticket ID
     */
    public $id;
    
    /**
     *  @var integer Ticket Row
     */
    public $row;
    
    /**
     *  @var integer Ticket Place
     */
    public $place;
    
    /**
     * @var type  @var nubmer Ticket Cost
     */
    public $cost;
    
    /**
     * @var type  @var string Ticket State can be equal to 'free', 'reserved' or 'saled'
     */
    public $state;
    
    /**
     *  @var datetime Reserved Ticket Expiration DayTime
     */
    public $reservation_expiration;
    
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'tickets';
    }

    /**
     * @return array of Validator rules
     */
    public function rules()
    {
        return [
            [['id', 'row', 'place', 'cost'], 'required'],
            [['id', 'row', 'place'], 'integer'],
            [['cost'], 'number'],
            [['state'],  'in', 'range' => ['free', 'reserved', 'saled']],
            [['reservation_expiration'], 'safe'],
            [['id'], 'unique'],
        ];
    }

    /**
     * @return array of String attribute labels
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

    /**
     * @param boolean $insert flag
     * @return boolean
     */    
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if (!$this->isNewRecord && $this->state === 'reserved') {
                $this->reservation_expiration = date('Y-m-d H:i:s', time()+\yii::$app->params['reservationExpirationTime']);
            }
            else {
                $this->reservation_expiration = null;
            }
            return true;
        }
        return false;
    }
}
