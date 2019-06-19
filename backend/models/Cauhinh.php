<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_cauhinh".
 *
 * @property int $id
 * @property string $tieude
 * @property string $slogan
 * @property string $footer
 * @property string $gioithieu
 * @property string $mota
 * @property string $tukhoa
 * @property string $bando
 * @property string $hotline1
 * @property string $hotline2
 * @property string $facebook
 * @property string $youtube
 * @property string $google
 * @property int $sp_moi
 * @property int $sp_dacbiet
 * @property int $sp_banchay
 * @property int $sp_danhmuc
 * @property int $sp_cungloai
 * @property int $tintuc_1trang
 * @property int $tintuc_khac
 * @property int $qc_2ben
 * @property int $qc_goc_phai
 * @property int $back_top
 */
class Cauhinh extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_cauhinh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tieude', 'slogan', 'footer', 'gioithieu', 'mota', 'tukhoa'], 'required'],
            [['footer', 'gioithieu', 'mota', 'tukhoa', 'bando'], 'string'],
            [['sp_moi', 'sp_dacbiet', 'sp_banchay', 'sp_danhmuc', 'sp_cungloai', 'tintuc_1trang', 'tintuc_khac', 'qc_2ben', 'qc_goc_phai', 'back_top'], 'integer'],
            [['tieude', 'slogan', 'facebook', 'youtube', 'google'], 'string', 'max' => 200],
            [['hotline1', 'hotline2'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tieude' => 'Tiêu đề',
            'slogan' => 'Slogan',
            'footer' => 'Chân trang',
            'gioithieu' => 'Giới thiệu',
            'mota' => 'Mô tả',
            'tukhoa' => 'Từ khóa',
            'bando' => 'Bản đồ',
            'hotline1' => 'Hotline1',
            'hotline2' => 'Hotline2',
            'facebook' => 'Facebook',
            'youtube' => 'Youtube',
            'google' => 'Google',
            'sp_moi' => 'Số SP mới',
            'sp_dacbiet' => 'Số SP đặc biệt',
            'sp_banchay' => 'Số SP bán chạy',
            'sp_danhmuc' => 'Số SP danh mục',
            'sp_cungloai' => 'Số SP cùng loại',
            'tintuc_1trang' => 'Tin tức 1 trang',
            'tintuc_khac' => 'Tin tức khác',
            'qc_2ben' => 'Có QC 2 bên',
            'qc_goc_phai' => 'Có QC góc phải',
            'back_top' => 'Có Backtop',
        ];
    }
}
