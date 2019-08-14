<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "halls".
 *
 * @property int $id
 * @property string $title
 * @property int $rows_num
 * @property string $created_at
 * @property string $updated_at
 * @property int $cinema_id
 *
 * @property Cinema $cinema
 * @property Row[] $rows
 * @property Show[] $shows
 */
class Hall extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'halls';
    }
    
    /**
     * {@inheritdoc}
     */    
    public function extraFields()
    {
        return ['shows', 'rows'];
    }
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'rows_num', 'cinema_id'], 'required'],
            [['rows_num', 'cinema_id'], 'integer'],
            [['title'], 'string', 'max' => 253],
            [['cinema_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cinema::className(), 'targetAttribute' => ['cinema_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'rows_num' => 'Rows Num',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'cinema_id' => 'Cinema ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCinema()
    {
        return $this->hasOne(Cinema::className(), ['id' => 'cinema_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRows()
    {
        return $this->hasMany(Row::className(), ['hall_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShows()
    {
        return $this->hasMany(Show::className(), ['hall_id' => 'id']);
    }
}
