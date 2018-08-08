<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $mobile
 * @property int $gender
 * @property string $created_at
 * @property string $updated_at
 */
class UserModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'username', 'password', 'email', 'mobile', 'gender'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'username', 'password', 'email'], 'string', 'max' => 255],
            [['mobile'], 'string', 'max' => 15],
            [['gender'], 'string', 'max' => 4],
            [['email'], 'unique'],
            [['username'], 'unique'],
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
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'gender' => 'Gender',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
