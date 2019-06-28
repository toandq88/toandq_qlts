<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_donvi".
 *
 * @property int $id_donvi
 * @property string $ten
 * @property string $tenviettat
 * @property string $diachi
 * @property string $email
 * @property string $dienthoai
 * @property string $website
 * @property string $hinhanh
 * @property string $mota
 * @property int $ngaytao
 * @property int $loaidonvi 1-Chủ quản, 2-Quản lý, Vận hành; 3-Sửa chữa, Xây dựng
 */
class Donvi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_donvi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten', 'tenviettat', 'diachi', 'email', 'ngaytao', 'loaidonvi'], 'required'],
            [['mota'], 'string'],
            [['ngaytao', 'loaidonvi'], 'integer'],
            [['ten', 'diachi', 'email', 'hinhanh'], 'string', 'max' => 255],
            [['tenviettat', 'website'], 'string', 'max' => 50],
            [['dienthoai'], 'string', 'max' => 20],
            [['tenviettat'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_donvi' => 'ID',
            'ten' => 'Tên',
            'tenviettat' => 'Tên viết tắt',
            'diachi' => 'Địa chỉ',
            'email' => 'Email',
            'dienthoai' => 'Điện thoại',
            'website' => 'Website',
            'hinhanh' => 'Hình ảnh',
            'mota' => 'Mô tả',
            'ngaytao' => 'Ngày tạo',
            'loaidonvi' => 'Loại đơn vị',
        ];
    }
}
