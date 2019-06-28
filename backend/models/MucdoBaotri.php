<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_mucdo_baotri".
 *
 * @property int $id
 * @property string $ten
 * @property int $thutu
 * @property string $nguoitao
 * @property string $ngaytao
 * @property string $nguoisua
 * @property string $ngaysua
 */
class MucdoBaotri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_mucdo_baotri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten', 'thutu', 'nguoitao', 'nguoisua'], 'required'],
            [['thutu'], 'integer'],
            [['ngaytao', 'ngaysua'], 'safe'],
            [['ten'], 'string', 'max' => 255],
            [['nguoitao', 'nguoisua'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten' => 'Tên',
            'thutu' => 'Thứ tự',
            'nguoitao' => 'Người tạo',
            'ngaytao' => 'Ngày tạo',
            'nguoisua' => 'Người sửa',
            'ngaysua' => 'Ngày sửa',
        ];
    }
}
