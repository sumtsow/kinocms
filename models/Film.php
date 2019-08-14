<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "films".
 *
 * @property int $id
 * @property string $title
 * @property string $banner
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Show[] $shows
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'films';
    }
    
    /**
     * {@inheritdoc}
     */    
    public function extraFields()
    {
        return ['shows'];
    }
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'banner'], 'required'],
            [['title', 'banner'], 'string', 'max' => 512],
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
            'banner' => 'Banner',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShows()
    {
        return $this->hasMany(Show::className(), ['film_id' => 'id']);
    }
}
