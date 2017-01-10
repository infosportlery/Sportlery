<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $allDay
 * @property string $start
 * @property string $end
 * @property string $url
 * @property string $created_date
 *
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'allDay', 'start', 'end', 'url', 'ass_id'], 'required'],
            [['allDay', 'ass_id'], 'integer'],
            [['start', 'end', 'created_date'], 'safe'],
            [['title', 'description'], 'string', 'max' => 255],
            [['url'], 'string', 'max' => 140],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'allDay' => 'All Day',
            'start' => 'Start',
            'end' => 'End',
            'url' => 'Url',
            'created_date' => 'Created Date',
        ];
    }
}
