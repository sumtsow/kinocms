<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cinemas".
 *
 * @property int $id
 * @property string $title
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Hall[] $halls
 */
class Cinema extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cinemas';
    }
    
    /**
     * {@inheritdoc}
     */    
    public function extraFields()
    {
        return ['halls'];
    }
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 256],
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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHalls()
    {
        return $this->hasMany(Hall::className(), ['cinema_id' => 'id']);
    }
}
