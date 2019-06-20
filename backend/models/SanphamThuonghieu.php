<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_sanpham_thuonghieu".
 *
 * @property int $id
 * @property string $ten
 * @property string $ten_url
 * @property string $logo
 * @property string $website
 * @property int $thutu
 * @property int $tinhtrang
 * @property string $nguoitao
 * @property string $nguoisua
 * @property string $ngaytao
 * @property string $ngaysua
 */
class SanphamThuonghieu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_sanpham_thuonghieu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten', 'tinhtrang', 'nguoitao', 'nguoisua'], 'required'],
            [['thutu', 'tinhtrang'], 'integer'],
            [['ngaytao', 'ngaysua'], 'safe'],
            [['ten', 'ten_url', 'logo', 'website'], 'string', 'max' => 200],
            [['nguoitao', 'nguoisua'], 'string', 'max' => 100],
            [['ten'], 'unique'],
            [['ten_url'], 'unique'],
            [['logo'],'image','extensions'=>'jpg,png,gif', 'maxSize' => 1024*1024*10, 'minWidth' => 100, 'minHeight' => 100],   //10Mb
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten' => 'Tên thương hiệu',
            'ten_url' => 'URL',
            'logo' => 'Logo',
            'website' => 'Website',
            'thutu' => 'Thứ tự',
            'tinhtrang' => 'Kích hoạt',
            'nguoitao' => 'Người tạo',
            'nguoisua' => 'Người sửa',
            'ngaytao' => 'Ngày tạo',
            'ngaysua' => 'Ngày sửa',
        ];
    }
}
