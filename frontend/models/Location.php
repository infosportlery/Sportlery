<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property integer $id
 * @property string $name
 * @property string $street
 * @property string $zipcode
 * @property string $category
 * @property string $description
 * @property string $price
 * @property string $avatar
 * @property string $location
 * @property integer $type
 */
class Location extends \yii\db\ActiveRecord
{

    public $file;   
    /**
     * @inheritdoc
     */
    public function beforeSave($user_id)
    {
        $this->user_id = Yii::$app->user->identity->id;
        return $this->user_id;  
    }

    public static function tableName()
    {
        return 'location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'category_id', 'city', 'street', 'zipcode', 'type'], 'required'],
            [['description'], 'string'],
            [['type'], 'integer'],
            [['name', 'city'], 'string', 'max' => 40],
            [['price'], 'string', 'max' => 20],
            [['avatar'], 'string', 'max' => 200],
            [['file'], 'file'],
            [['zipcode'], 'string', 'max' => 7],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'street' => 'Street',
            'zipcode' => 'Zipcode',
            'category_id' => 'Category',
            'description' => 'Description',
            'price' => 'Price',
            'city' => 'City',
            'type' => 'Type',
            'file' => 'Avatar',
        ];
    }

    public function getAvatarUrl()
    {
        if (empty($this->avatar)) {
            return Yii::$app->request->BaseUrl.'/uploads/default.jpg';
        } else {
            return Yii::$app->request->BaseUrl.'/'.$this->avatar;
        }
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
