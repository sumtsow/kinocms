<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shows".
 *
 * @property int $id
 * @property string $date
 * @property string $time
 * @property string $created_at
 * @property string $updated_at
 * @property int $hall_id
 * @property int $film_id
 *
 * @property Film $film
 * @property Hall $hall
 * @property Ticket[] $tickets
 */
class Show extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shows';
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
            [['date', 'time', 'hall_id', 'film_id'], 'required'],
            [['date', 'time'], 'safe'],
            [['hall_id', 'film_id'], 'integer'],
            [['film_id'], 'exist', 'skipOnError' => true, 'targetClass' => Film::className(), 'targetAttribute' => ['film_id' => 'id']],
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
            'date' => 'Date',
            'time' => 'Time',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'hall_id' => 'Hall ID',
            'film_id' => 'Film ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilm()
    {
        return $this->hasOne(Film::className(), ['id' => 'film_id']);
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
        return $this->hasMany(Ticket::className(), ['show_id' => 'id']);
    }
}
