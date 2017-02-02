<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $city
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    public $file;

    public $profile;
    public $new_password;
    /**
     * @param \nodge\eauth\ServiceBase $service
     * @return User
     * @throws ErrorException
     */
    public static function findByEAuth($service) {
        if (!$service->getIsAuthenticated()) {
            throw new ErrorException('EAuth user should be authenticated before creating identity.');
        }

        $user = new User();

        $id = self::generateId();

        $attributes = [
            'id' => $id,
            'username' => $service->getAttribute('name'),
            'firstname' => $service->getAttribute('first_name'),
            'lastname' => $service->getAttribute('last_name'),
            'email' => $service->getAttribute('email'),
            'birthday' => $service->getAttribute('birthday'),
            'gender' => $service->getAttribute('gender'),
            'avatar' => $service->getAttribute('photo_url'),
            'profile' => $service->getAttributes(),
        ];
        $attributes['profile']['service'] = $service->getServiceName();
        Yii::$app->getSession()->set('user-'.$id, $attributes);

        $exists = User::find()->where(['email' => $service->getAttribute('email')])->exists();


        // If email doesnt exists
        if(!$exists) {

            // true, email doesnt exists. Register user.
            $user->id = $service->getAttribute('id');
            $user->username = $service->getAttribute('first_name');
            $user->firstname = $service->getAttribute('first_name');
            $user->lastname = $service->getAttribute('last_name');
            $user->email = $service->getAttribute('email');
            $user->gender = $service->getAttribute('gender');
            $user->birthday = $service->getAttribute('birthday');
            $user->avatar = $service->getAttribute('photo_url');

            $user->save();

        }


        return new self($attributes);
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            [['username', 'firstname', 'lastname', 'email', 'new_password', 'favorite_sport',
                'favorite_athlete', 'birthday', 'gender', 'city'], 'string'],
            [['avatar'], 'string', 'max' => 200],
            ['new_password', 'string', 'min' => 6],
            [['file'], 'file'],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
        ];
    }

    public function attributeLabels()
    {
        return [
            'favorite_sport' => 'Welke sport doe je?',
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        if (Yii::$app->getSession()->has('user-'.$id)) {
            return new self(Yii::$app->getSession()->get('user-'.$id));
        }
        else {
            return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);

        }
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by email
     *
     * @param string $email
     * @return static|null
     */
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public function getUserId()
    {
        $userId = 1;
        return $userId;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    public function getAvatarUrl()
    {
        if (empty($this->avatar)) {
            return Yii::$app->request->BaseUrl.'/uploads/default.jpg';
        } else {
            return Yii::$app->request->BaseUrl.'/'.$this->avatar;
        }
    }

    public function updatePassword($new_password) {
        $this->password_hash = Yii::$app->security->generatePasswordHash($new_password);
    }

    public function generateImageName()
    {
        $avatarName = Yii::$app->security->generateRandomString();

        return $avatarName;
    }
    public function generateId()
    {
        $id = Yii::$app->security->generateRandomString();

        return $id;
    }

    public function saveAvatar()
    {
        $imageName = self::generateImageName();

        // get the instance of the uploaded file
        $model->file = UploadedFile::getInstance($model, 'file');
        $model->file->saveAs('uploads/' . $imageName . '.' . $model->file->extension);

        // save the path in db
        $model->avatar = 'uploads/' . $imageName . '.' . $model->file->extension;

        $model->save();
    }

     public function getUserData()
    {
        $user = User::find()
          ->where(['id' => Yii::$app->user->identity->id])
          ->one();

        return $user;
    }
}
