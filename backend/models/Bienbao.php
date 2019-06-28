<?php

namespace app\models;

use Yii;
use app\models\Donvi;
use app\models\Tuyenduong;
use app\models\LoaiLanduong;
use app\models\BienbaoLoai;
use backend\models\VnTinh;
use backend\models\VnHuyen;
use backend\models\VnXa;

/**
 * This is the model class for table "tb_bienbao".
 *
 * @property int $id
 * @property string $id_tuyenduong
 * @property string $id_donvikhaithac
 * @property int $kmchinh
 * @property int $kmle
 * @property int $kmchinh_nhanh
 * @property int $kmle_nhanh
 * @property string $tennhanh
 * @property string $vido
 * @property string $kinhdo
 * @property int $loailanduong
 * @property string $id_tinh
 * @property string $id_huyen
 * @property string $id_xa
 * @property string $loailapdatcaccot
 * @property string $loaicot
 * @property int $loaibien
 * @property int $hinhdang
 * @property double $khoangcachtucotdentimduong
 * @property double $chieucaotinhkhong
 * @property string $loaivatlieuphu
 * @property string $soluongbientrencot
 * @property string $namxaydung
 * @property int $vongdoi
 * @property string $bienbao_sohieu
 * @property string $bienbao_tenbien
 * @property double $bienbao_cochu
 * @property double $bienbao_chieucao
 * @property double $bienbao_chieurong
 * @property double $bienbao_dientich
 * @property string $bienbao_vatlieu
 * @property string $bienbao_loaiphanquang
 * @property int $bienbao_capphanquang
 * @property string $bienbao_kieuganbien
 * @property string $bocuc_huongmuiten
 * @property string $bocuc_tendiemden
 * @property string $bocuc_khoangcachtoidiemden
 * @property string $bocuc_khoangcachtoinutgiao
 * @property int $bocuc_tuyenso
 * @property string $bocuc_tentuyen
 * @property string $nguoitao
 * @property string $ngaytao
 * @property string $nguoisua
 * @property string $ngaysua
 */
class Bienbao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_bienbao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tuyenduong', 'id_donvikhaithac', 'kmchinh', 'kmle', 'loailanduong', 'id_tinh', 'id_huyen', 'id_xa', 'loailapdatcaccot', 'loaicot', 'loaibien', 'hinhdang', 'khoangcachtucotdentimduong', 'chieucaotinhkhong', 'loaivatlieuphu', 'soluongbientrencot', 'namxaydung', 'vongdoi', 'bienbao_sohieu', 'bienbao_tenbien', 'bienbao_cochu', 'bienbao_chieucao', 'bienbao_chieurong', 'bienbao_dientich', 'bienbao_vatlieu', 'bienbao_loaiphanquang', 'bienbao_capphanquang', 'bienbao_kieuganbien', 'bocuc_huongmuiten', 'bocuc_tendiemden', 'bocuc_khoangcachtoidiemden', 'bocuc_khoangcachtoinutgiao', 'bocuc_tuyenso', 'bocuc_tentuyen', 'nguoitao', 'nguoisua'], 'required'],
            [['kmchinh', 'kmle', 'kmchinh_nhanh', 'kmle_nhanh', 'loailanduong', 'loaibien', 'hinhdang', 'vongdoi', 'bienbao_capphanquang', 'bocuc_tuyenso'], 'integer'],
            [['khoangcachtucotdentimduong', 'chieucaotinhkhong', 'bienbao_cochu', 'bienbao_chieucao', 'bienbao_chieurong', 'bienbao_dientich'], 'number'],
            [['namxaydung', 'ngaytao', 'ngaysua'], 'safe'],
            [['id_tuyenduong', 'vido', 'kinhdo'], 'string', 'max' => 20],
            [['id_donvikhaithac', 'nguoitao', 'nguoisua'], 'string', 'max' => 50],
            [['tennhanh', 'loailapdatcaccot', 'loaicot', 'loaivatlieuphu', 'soluongbientrencot', 'bienbao_sohieu', 'bienbao_vatlieu', 'bienbao_loaiphanquang', 'bienbao_kieuganbien', 'bocuc_huongmuiten', 'bocuc_tendiemden', 'bocuc_khoangcachtoidiemden', 'bocuc_khoangcachtoinutgiao', 'bocuc_tentuyen'], 'string', 'max' => 255],
            [['id_tinh', 'id_huyen', 'id_xa'], 'string', 'max' => 5],
            [['bienbao_tenbien'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_tuyenduong' => 'Tuyến đường',
            'id_donvikhaithac' => 'Đơn vị khai thác',
            'kmchinh' => 'Km',
            'kmle' => '+km',
            'kmchinh_nhanh' => 'Km (N)',
            'kmle_nhanh' => '+km (N)',
            'tennhanh' => 'Tên nhánh',
            'vido' => 'Vĩ độ',
            'kinhdo' => 'Kinh độ',
            'loailanduong' => 'Loại làn đường',
            'id_tinh' => 'Tỉnh',
            'id_huyen' => 'Huyện',
            'id_xa' => 'Xã',
            'loailapdatcaccot' => 'Loại lắp đặt các cột',
            'loaicot' => 'Loại cột',
            'loaibien' => 'Loại biển',
            'hinhdang' => 'Hình dạng',
            'khoangcachtucotdentimduong' => 'Khoảng cách từ cột đến tim đường',
            'chieucaotinhkhong' => 'Chiều cao tĩnh không',
            'loaivatlieuphu' => 'Loại vật liệu phủ',
            'soluongbientrencot' => 'Số biển/cột',
            'namxaydung' => 'Năm xây dựng',
            'vongdoi' => 'Vòng đời',
            'bienbao_sohieu' => 'Số hiệu',
            'bienbao_tenbien' => 'Tên biển',
            'bienbao_cochu' => 'Cỡ chữ',
            'bienbao_chieucao' => 'Chiều cao',
            'bienbao_chieurong' => 'Chiều rộng',
            'bienbao_dientich' => 'Diện tích',
            'bienbao_vatlieu' => 'Vật liệu',
            'bienbao_loaiphanquang' => 'Loại phản quang',
            'bienbao_capphanquang' => 'Cấp phản quang',
            'bienbao_kieuganbien' => 'Kiểu gắn biển',
            'bocuc_huongmuiten' => 'Hướng mũi tên',
            'bocuc_tendiemden' => 'Tên điểm đến',
            'bocuc_khoangcachtoidiemden' => 'Khoảng cách tới điểm đến',
            'bocuc_khoangcachtoinutgiao' => 'Khoảng cách tới nút giao',
            'bocuc_tuyenso' => 'Tuyến số',
            'bocuc_tentuyen' => 'Tên tuyến',
            'nguoitao' => 'Người tạo',
            'ngaytao' => 'Ngày tạo',
            'nguoisua' => 'Người sửa',
            'ngaysua' => 'Ngày sửa',
        ];
    }
    
    //Lấy tên Tuyến đường đặt biển
    public function getTuyenduong() {
        return $this->hasOne(Tuyenduong::className(), ['matuyenduong' => 'id_tuyenduong']);
    }
    
    //Lấy tên đơn vị thực hiện quản lý
    public function getDonvi() {
        return $this->hasOne(Donvi::className(), ['id_donvi' => 'id_donvikhaithac']);
    }
    
    //Thuộc tỉnh
    public function getVntinh() {
        return $this->hasOne(vnTinh::className(), ['id_tinh' => 'id_tinh']);
    }

    //Thuộc huyện
    public function getVnhuyen() {
        return $this->hasOne(VnHuyen::className(), ['id_huyen' => 'id_huyen']);
    }

    //Thuộc xã
    public function getVnxa() {
        return $this->hasOne(VnXa::className(), ['id_xa' => 'id_xa']);
    }
    
    //Loại làn đường
    public function getLanduong() {
        return $this->hasOne(LoaiLanduong::className(), ['id' => 'loailanduong']);
    }
    
    //Loại cột
    public function getLoaicotbien() {
        return $this->hasOne(BienbaoLoai::className(), ['id' => 'loaicot']);
    }
    
    //Loại cột
    public function getLoaibienbao() {
        return $this->hasOne(BienbaoLoai::className(), ['id' => 'loaibien']);
    }
    
    //Loại cột
    public function getHinhdangbien() {
        return $this->hasOne(BienbaoLoai::className(), ['id' => 'hinhdang']);
    }
}
