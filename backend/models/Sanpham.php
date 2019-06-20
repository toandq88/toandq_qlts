<?php

namespace app\models;

use Yii;
use app\models\SanphamDanhmuc;
use app\models\SanphamThuonghieu;

/**
 * This is the model class for table "tb_sanpham".
 *
 * @property int $id
 * @property string $ma_sanpham
 * @property string $ten
 * @property string $ten_url
 * @property int $id_danhmuc
 * @property int $id_thuonghieu
 * @property string $hinhanh
 * @property string $mota_ngan
 * @property string $mota
 * @property string $baohanh
 * @property int $soluong
 * @property int $giaban
 * @property int $giakhuyenmai
 * @property string $khuyenmai
 * @property int $sp_banchay
 * @property int $sp_noibat
 * @property int $sp_moinhap
 * @property string $meta_mota
 * @property string $meta_tukhoa
 * @property string $link_video
 * @property int $video_width
 * @property int $video_height
 * @property string $file_huongdan
 * @property string $pk_dikem
 * @property int $thutu
 * @property int $tinhtrang
 * @property string $nguoitao
 * @property string $nguoisua
 * @property string $ngaytao
 * @property string $ngaysua
 */
class Sanpham extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'tb_sanpham';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['ma_sanpham', 'ten', 'id_danhmuc', 'id_thuonghieu', 'tinhtrang', 'nguoitao', 'nguoisua'], 'required'],
            [['id_danhmuc', 'id_thuonghieu', 'soluong', 'giaban', 'giakhuyenmai', 'baohanh', 'sp_banchay', 'sp_noibat', 'sp_moinhap', 'video_width', 'video_height', 'thutu', 'tinhtrang'], 'integer'],
            [['mota_ngan', 'mota', 'meta_mota', 'meta_tukhoa'], 'string'],
            [['ngaytao', 'ngaysua'], 'safe'],
            [['ma_sanpham', 'nguoitao', 'nguoisua'], 'string', 'max' => 100],
            [['ten', 'ten_url', 'hinhanh', 'khuyenmai', 'link_video', 'file_huongdan', 'pk_dikem'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'ma_sanpham' => 'Mã sản phẩm',
            'ten' => 'Tên sản phẩm',
            'ten_url' => 'Tên URL',
            'id_danhmuc' => 'Danh mục',
            'id_thuonghieu' => 'Thương hiệu',
            'hinhanh' => 'Hình ảnh',
            'mota_ngan' => 'Mô tả ngắn',
            'mota' => 'Mô tả chi tiết',
            'baohanh' => 'Bảo hành (tháng)',
            'soluong' => 'Số lượng',
            'giaban' => 'Giá bán (VNĐ)',
            'giakhuyenmai' => 'Giá khuyến mãi (VNĐ)',
            'khuyenmai' => 'Khuyến mại',
            'sp_banchay' => 'SP bán chạy',
            'sp_noibat' => 'SP nổi bật',
            'sp_moinhap' => 'SP mới nhập',
            'meta_mota' => 'Mô tả (meta)',
            'meta_tukhoa' => 'Từ khóa (meta)',
            'link_video' => 'Video Youtube',
            'video_width' => 'Video (rộng)',
            'video_height' => 'Video (cao)',
            'file_huongdan' => 'File Hướng dẫn',
            'pk_dikem' => 'Phụ kiện đi kèm',
            'thutu' => 'Thứ tự',
            'tinhtrang' => 'Tình trạng',
            'nguoitao' => 'Người tạo',
            'nguoisua' => 'Người sửa',
            'ngaytao' => 'Ngày tạo',
            'ngaysua' => 'Ngày sửa',
        ];
    }
    
    //Lấy Danh mục của sản phẩm
    public function getDanhmucsanpham() {
        return $this->hasOne(SanphamDanhmuc::className(), ['id' => 'id_danhmuc']);
    }
    
    //Lấy Thương hiệu của sản phẩm
    public function getThuonghieusanpham() {
        return $this->hasOne(SanphamThuonghieu::className(), ['id' => 'id_danhmuc']);
    }
}
