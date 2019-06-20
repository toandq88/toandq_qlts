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
class SanphamDanhmuc extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'tb_sanpham_danhmuc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['ten', 'tinhtrang'], 'required'],
            [['parents', 'thutu', 'tinhtrang'], 'integer'],
            [['mota', 'meta_mota', 'meta_tukhoa'], 'string'],
            [['nguoitao', 'nguoisua'], 'string', 'max' => 100],
            [['ten', 'ten_url', 'hinhanh'], 'string', 'max' => 200],
            [['ten'], 'unique'],
            [['hinhanh'], 'image', 'extensions' => 'jpg,png,gif', 'maxSize' => 1024 * 1024 * 10, 'minWidth' => 100, 'minHeight' => 100], //10Mb
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'ten' => 'Tên',
            'ten_url' => 'Url',
            'hinhanh' => 'Hình ảnh',
            'parents' => 'Thuộc danh mục',
            'mota' => 'Mô tả',
            'meta_mota' => 'Mô tả (Meta)',
            'meta_tukhoa' => 'Từ khóa (Meta)',
            'thutu' => 'Thứ tự',
            'tinhtrang' => 'Trạng thái',
            'nguoitao' => 'Người tạo',
            'nguoisua' => 'Người sửa',
            'ngaytao' => 'Ngày tạo',
            'ngaysua' => 'Ngày sửa',
        ];
    }

    public static function getDacap() {
        $options = [];
        $parent = SanphamDanhmuc::find()->where(["parents" => null])->all();
        foreach ($parent as $id => $p) {
            $children = SanphamDanhmuc::find()->where(["parents" => $p->id])->all();
            $child_options = [];
            if ($children) {
                foreach ($children as $child) {
                    $child_options[$child->id] = $child->ten;
                }
            } else {
                $child_options[$p->id] = $p->ten;
            }

            $options[$p->ten] = $child_options;
        }
        return $options;
    }

    //Lấy Danh mục cha nếu có
    public function getSanphamdanhmuc() {
        return $this->hasOne(SanphamDanhmuc::className(), ['id' => 'parents']);
    }
}
