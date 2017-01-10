<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "time_gz_time_slot_users".
 *
 * @property integer $id
 * @property string $email
 * @property string $first
 * @property string $last
 * @property string $company_name
 * @property string $phone
 * @property string $address
 * @property string $city
 * @property string $zip
 * @property string $description
 * @property string $coc_id
 * @property string $btw_no
 * @property string $avatar
 * @property string $password
 * @property string $status
 * @property integer $type
 * @property string $last_login
 */
class PaidLocation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'time_gz_time_slot_users';
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
            [['description', 'status'], 'string'],
            [['type'], 'required'],
            [['type'], 'integer'],
            [['last_login'], 'safe'],
            [['email', 'first', 'last', 'avatar', 'password'], 'string', 'max' => 250],
            [['company_name', 'phone', 'address', 'city', 'zip', 'coc_id', 'btw_no'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'first' => 'First',
            'last' => 'Last',
            'company_name' => 'Company Name',
            'phone' => 'Phone',
            'address' => 'Address',
            'city' => 'City',
            'zip' => 'Zip',
            'description' => 'Description',
            'coc_id' => 'Coc ID',
            'btw_no' => 'Btw No',
            'avatar' => 'Avatar',
            'password' => 'Password',
            'status' => 'Status',
            'type' => 'Type',
            'last_login' => 'Last Login',
        ];
    }
    public function getAvatarUrl()
    {
        if (!file_exists($this->avatar)) {
            return Yii::$app->request->BaseUrl.'/uploads/default.jpg';
        } else {
            return Yii::$app->request->BaseUrl.'/'.$this->avatar;
        }
    }
}
