<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_sanpham_danhmuc".
 *
 * @property int $id
 * @property string $ten
 * @property string $ten_url
 * @property string $hinhanh
 * @property int $parents
 * @property string $mota
 * @property string $meta_mota
 * @property string $meta_tukhoa
 * @property int $thutu
 * @property int $tinhtrang
 */
class SanphamDanhmuc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_sanpham_danhmuc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ten', 'ten_url', 'tinhtrang'], 'required'],
            [['parents', 'thutu', 'tinhtrang'], 'integer'],
            [['mota', 'meta_mota', 'meta_tukhoa'], 'string'],
            [['ten', 'ten_url', 'hinhanh'], 'string', 'max' => 200],
            [['ten'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ten' => 'Ten',
            'ten_url' => 'Ten Url',
            'hinhanh' => 'Hinhanh',
            'parents' => 'Parents',
            'mota' => 'Mota',
            'meta_mota' => 'Meta Mota',
            'meta_tukhoa' => 'Meta Tukhoa',
            'thutu' => 'Thutu',
            'tinhtrang' => 'Tinhtrang',
        ];
    }
}
