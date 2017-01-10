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
 * @property string $avatar
 * @property string $password
 * @property string $status
 * @property integer $type
 * @property string $last_login
 * @property string $company_name
 * @property string $phone
 * @property string $address
 * @property string $city
 * @property string $zip
 * @property string $fax
 * @property string $description
 * @property string $coc_id
 * @property string $btw_no
 */
class Users extends \yii\db\ActiveRecord
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
            [['status', 'description'], 'string'],
            [['type', 'company_name', 'phone', 'address', 'city', 'zip', 'fax', 'description', 'coc_id', 'btw_no'], 'required'],
            [['type'], 'integer'],
            [['last_login'], 'safe'],
            [['email', 'first', 'last', 'avatar', 'password', 'company_name', 'phone', 'address', 'city', 'zip', 'fax', 'coc_id', 'btw_no'], 'string', 'max' => 250],
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
            'avatar' => 'Avatar',
            'password' => 'Password',
            'status' => 'Status',
            'type' => 'Type',
            'last_login' => 'Last Login',
            'company_name' => 'Company Name',
            'phone' => 'Phone',
            'address' => 'Address',
            'city' => 'City',
            'zip' => 'Zip',
            'fax' => 'Fax',
            'description' => 'Description',
            'coc_id' => 'Coc ID',
            'btw_no' => 'Btw No',
        ];
    }
}
