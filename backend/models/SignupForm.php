<?php

namespace backend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model {

    public $username;
    public $email;
    public $password;
    public $name;
    public $phone;
    public $status;
    public $created_at;
    public $updated_at;

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            ['username', 'trim'],
            [['username', 'email', 'password', 'name'], 'required', 'message'=>'Vui lòng nhập thông tin {attribute}.'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Tên đăng nhập này đã tồn tại.'],
            ['username', 'string', 'min' => 2, 'max' => 50],
            ['email', 'trim'],
            ['email', 'email'],
            ['email', 'string', 'max' => 100],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Email này đã được sử dụng.'],
            ['password', 'string', 'min' => 6],
            ['phone', 'string', 'min' => 10, 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup() {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone = $this->phone;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }

}
