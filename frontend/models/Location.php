<?php

namespace app\models;

use Yii;
use common\models\User;



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
 * @property string $url
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
            [['user_id', 'category_id', 'name', 'street', 'zipcode', 'category', 'city', 'type', 'url'], 'required'],
           [['user_id', 'category_id', 'type'], 'integer'],
           [['category', 'description'], 'string'],
           [['name', 'street', 'city'], 'string', 'max' => 40],
           [['zipcode'], 'string', 'max' => 7],
           [['avatar'], 'string', 'max' => 200],
           [['url'], 'string', 'max' => 255],
           [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Naam',
            'street' => 'Straat',
            'zipcode' => 'Postcode',
            'category_id' => 'Categorie (optioneel)',
            'description' => 'Beschrijving (optioneel)',
            'price' => 'Prijs (optioneel)',
            'city' => 'Stad',
            'type' => 'Type (optioneel)',
            'file' => 'Avatar',
            'url' => 'Url (optioneel)',
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

    public function getCategoryName()
    {
        if(!isset($this->category_id))
        {
            $this->category_id = 1;
        }
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
