<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $name
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $phone
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property TbDonvi $tbDonvi
 * @property TbTuyenduong[] $donvis
 * @property TbCauBaotri[] $donvis0
 * @property TbCauKiemtra[] $donvis1
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'name', 'status'], 'required', 'message'=>'Vui lòng nhập thông tin {attribute}.'],
            [['created_at', 'updated_at'], 'integer'],
            [['username', 'name', 'auth_key', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 15],
            [['status'], 'string', 'max' => 2],
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
            'username' => 'Tên đăng nhập',
            'name' => 'Họ tên',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'phone' => 'Số điện thoại',
            'status' => 'Tình trạng',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày sửa',
        ];
    }
}
