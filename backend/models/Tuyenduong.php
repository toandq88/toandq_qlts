<?php

namespace app\models;

use Yii;
use app\models\Donvi;
use backend\models\VnTinh;
use backend\models\VnHuyen;
use backend\models\VnXa;
use app\models\LoaiNenduong;
use app\models\LoaiLanduong;

/**
 * This is the model class for table "tb_tuyenduong".
 *
 * @property int $id
 * @property string $matuyenduong mã tuyến đường
 * @property string $tenduong
 * @property string $tentuyen
 * @property string $nhanhdanso
 * @property string $capduong
 * @property int $donviquanly
 * @property int $coquanquanly
 * @property int $tukmchinh
 * @property int $tukmle
 * @property int $denkmchinh
 * @property int $denkmle
 * @property string $vidodau
 * @property string $kinhdodau
 * @property string $vidocuoi
 * @property string $kinhdocuoi
 * @property int $loailanduong
 * @property string $id_tinh
 * @property string $id_huyen
 * @property string $id_xa
 * @property string $dieuchinhcotkm
 * @property double $chieudaitheocotkm
 * @property double $chieudaithucte
 * @property string $namhoanthanhxaydung
 * @property string $nambatdaukhaithac
 * @property double $hanhlangduongbo
 * @property string $loaicongtrinhduongbo
 * @property int $solanxecogioi
 * @property double $chieuronglanxecogioi
 * @property string $loaimatduonglanxecogioi
 * @property string $loaimatduonglanxethoso
 * @property double $chieurongphanduongxechay
 * @property double $chieurongmatduong
 * @property string $leduong
 * @property double $chieuronglegiaco
 * @property string $loaiketcaulegiaco
 * @property double $chieuronglekhonggiaco
 * @property string $viahe
 * @property double $chieurongviahe
 * @property string $loaiviahe
 * @property double $chieurongthoatnuoc
 * @property double $tocdothietke
 * @property double $tocdotoidacaclan
 * @property double $tocdotoithieucaclan
 * @property string $loaidiahinh
 * @property double $nhietdo
 * @property double $luongmuatrungbinh
 * @property int $loainenduong
 * @property string $anh_daidien
 * @property string $nguoitao
 * @property string $ngaytao
 * @property string $nguoisua
 * @property string $ngaysua
 */
class Tuyenduong extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'tb_tuyenduong';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['matuyenduong', 'tenduong', 'tentuyen', 'nhanhdanso', 'capduong', 'donviquanly', 'coquanquanly', 'tukmchinh', 'tukmle', 'denkmchinh', 'denkmle', 'vidodau', 'kinhdodau', 'vidocuoi', 'kinhdocuoi', 'loailanduong', 'id_tinh', 'id_huyen', 'id_xa', 'dieuchinhcotkm', 'chieudaitheocotkm', 'chieudaithucte', 'namhoanthanhxaydung', 'nambatdaukhaithac', 'hanhlangduongbo', 'loaicongtrinhduongbo', 'solanxecogioi', 'chieuronglanxecogioi', 'loaimatduonglanxecogioi', 'loaimatduonglanxethoso', 'chieurongphanduongxechay', 'chieurongmatduong', 'leduong', 'chieuronglegiaco', 'loaiketcaulegiaco', 'chieuronglekhonggiaco', 'viahe', 'chieurongviahe', 'loaiviahe', 'chieurongthoatnuoc', 'tocdothietke', 'tocdotoidacaclan', 'tocdotoithieucaclan', 'loaidiahinh', 'nhietdo', 'luongmuatrungbinh', 'loainenduong', 'nguoitao', 'ngaytao', 'nguoisua', 'ngaysua'], 'required'],
            [['donviquanly', 'coquanquanly', 'tukmchinh', 'tukmle', 'denkmchinh', 'denkmle', 'loailanduong', 'solanxecogioi', 'loainenduong'], 'integer'],
            [['dieuchinhcotkm', 'namhoanthanhxaydung', 'nambatdaukhaithac', 'ngaytao', 'ngaysua'], 'safe'],
            [['chieudaitheocotkm', 'chieudaithucte', 'hanhlangduongbo', 'chieuronglanxecogioi', 'chieurongphanduongxechay', 'chieurongmatduong', 'chieuronglegiaco', 'chieuronglekhonggiaco', 'chieurongviahe', 'chieurongthoatnuoc', 'tocdothietke', 'tocdotoidacaclan', 'tocdotoithieucaclan', 'nhietdo', 'luongmuatrungbinh'], 'number'],
            [['matuyenduong', 'vidodau', 'kinhdodau', 'vidocuoi', 'kinhdocuoi'], 'string', 'max' => 20],
            [['id_tinh', 'id_huyen', 'id_xa'], 'string', 'max' => 5],
            [['tenduong', 'tentuyen', 'nhanhdanso', 'capduong', 'loaicongtrinhduongbo', 'loaimatduonglanxecogioi', 'loaimatduonglanxethoso', 'leduong', 'loaiketcaulegiaco', 'viahe', 'loaiviahe', 'loaidiahinh', 'anh_daidien', 'nguoitao', 'nguoisua'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'matuyenduong' => 'Mã',
            'tenduong' => 'Tên đường',
            'tentuyen' => 'Tên tuyến',
            'nhanhdanso' => 'Nhánh dẫn số',
            'capduong' => 'Cấp đường',
            'donviquanly' => 'Đơn vị quản lý',
            'coquanquanly' => 'Cơ quan quản lý',
            'tukmchinh' => 'Km+',
            'tukmle' => 'km',
            'denkmchinh' => 'Km',
            'denkmle' => '+km',
            'vidodau' => 'Vĩ độ đầu',
            'kinhdodau' => 'Kinh độ đầu',
            'vidocuoi' => 'Vĩ độ cuối',
            'kinhdocuoi' => 'Kinh độ cuối',
            'loailanduong' => 'Loại làn đường',
            'id_tinh' => 'Tỉnh',
            'id_huyen' => 'Huyện',
            'id_xa' => 'Xã',
            'dieuchinhcotkm' => 'Thời điểm điều chỉnh cột km',
            'chieudaitheocotkm' => 'Chiều dài theo cột km',
            'chieudaithucte' => 'Chiều dài thực tế',
            'namhoanthanhxaydung' => 'Năm hoàn thành',
            'nambatdaukhaithac' => 'Năm khai thác',
            'hanhlangduongbo' => 'Hành lang đường bộ',
            'loaicongtrinhduongbo' => 'Loại công trình đường bộ',
            'solanxecogioi' => 'Số làn xe cơ giới',
            'chieuronglanxecogioi' => 'Chiều rộng làn xe cơ giới',
            'loaimatduonglanxecogioi' => 'Loại mặt đường làn xe cơ giới',
            'loaimatduonglanxethoso' => 'Loại mặt đường làn xe thô sơ',
            'chieurongphanduongxechay' => 'Chiều rộng phần xe chạy',
            'chieurongmatduong' => 'Chiều rộng mặt đường',
            'leduong' => 'Lề đường',
            'chieuronglegiaco' => 'Chiều rộng lề gia cố',
            'loaiketcaulegiaco' => 'Loại kết cấu lề gia cố',
            'chieuronglekhonggiaco' => 'Chiều rộng lề không gia cố',
            'viahe' => 'Vỉa hè',
            'chieurongviahe' => 'Chiều rộng vỉa hè',
            'loaiviahe' => 'Loại vỉa hè',
            'chieurongthoatnuoc' => 'Chiều rộng thoát nước',
            'tocdothietke' => 'Tốc độ thiết kế',
            'tocdotoidacaclan' => 'Tốc độ tối đa các làn',
            'tocdotoithieucaclan' => 'Tốc độ tối thiểu các làn',
            'loaidiahinh' => 'Loại địa hình',
            'nhietdo' => 'Nhiệt độ',
            'luongmuatrungbinh' => 'Lượng mưa trung bình',
            'loainenduong' => 'Loại nền đường',
            'anh_daidien' => 'Ảnh',
            'nguoitao' => 'Người tạo',
            'ngaytao' => 'Ngày tạo',
            'nguoisua' => 'Người sửa',
            'ngaysua' => 'Ngày sửa',
        ];
    }

    //Lấy tên đơn vị thực hiện quản lý tuyến đường
    public function getDonvi() {
        return $this->hasOne(Donvi::className(), ['id_donvi' => 'donviquanly']);
    }

    //Lấy tên cơ quan quản lý tuyến đường
    public function getCoquan() {
        return $this->hasOne(Donvi::className(), ['id_donvi' => 'coquanquanly']);
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

    //Loại nền đường
    public function getNenduong() {
        return $this->hasOne(LoaiNenduong::className(), ['id' => 'loainenduong']);
    }
    
    //Loại làn đường
    public function getLanduong() {
        return $this->hasOne(LoaiLanduong::className(), ['id' => 'loainenduong']);
    }
}
