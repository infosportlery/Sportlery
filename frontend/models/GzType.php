<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "time_gz_time_slot_type".
 *
 * @property integer $id
 * @property string $type_name
 */
class GzType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'time_gz_time_slot_type';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('manage');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_name'], 'required'],
            [['type_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_name' => 'Type Name',
        ];
    }
}
