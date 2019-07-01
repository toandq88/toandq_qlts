<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bienbao */

\yii\web\YiiAsset::register($this);
?>

<div class="row">
    <h3 class="box-title">Thông tin chung</h3>

    <div class="col-lg-2">Số hiệu biển: <span class="chudam"><?= $model->bienbao_sohieu ?></span></div>
    <div class="col-lg-2">Tên biển: <span class="chudam"><?= $model->bienbao_tenbien ?></span></div>
    <div class="col-lg-2">Tuyến đường: <span class="chudam"><?= $model->tuyenduong->tenduong ?></span></div> 
    <div class="col-lg-2">
        Lý trình: <span class="chudam">Km<?= $model->kmchinh . '+' . $model->kmle ?> 
        <?php 
        if($model->kmchinh_nhanh != '' || $model->kmle_nhanh != '')
            echo '(Nhánh: Km'.$model->kmchinh_nhanh . '+' . $model->kmle_nhanh.')';
        ?>
        </span>
    </div>
    <div class="col-lg-1">Địa phận: <span class="chudam"><?= @$model->vntinh->ten . ' / ' . @$model->vnhuyen->ten . ' / ' . @$model->vnxa->ten ?></span></div>
    <div class="col-lg-1">Loại làn đường: <span class="chudam"><?= $model->landuong->ten ?></span></div>
    <div class="col-lg-2">Loại lắp đặt các cột: <span class="chudam"><?= $model->loailapdatcaccot ?></span></div>
    <div class="col-lg-2">Loại cột: <span class="chudam"><?= $model->loaicotbien->ten ?></span></div> 
    <div class="col-lg-2">
        Tọa độ: <span class="chudam">(<?= $model->vido . '+' . $model->kinhdo ?>)</span>
    </div>
    <div class="col-lg-2">Loại biển: <span class="chudam"><?= $model->loaibienbao->ten ?></span></div>
    <div class="col-lg-2">Số biển/cột: <span class="chudam"><?= $model->soluongbientrencot ?></span></div>
    <div class="col-lg-2">K/c từ biển đến tim đường: <span class="chudam"><?= $model->khoangcachtucotdentimduong ?> (m)</span></div> 
    <div class="col-lg-2">Năm xây dựng: <span class="chudam"><?= $model->namxaydung ?></span></div>
    <div class="col-lg-2">Vòng đời: <span class="chudam"><?= $model->vongdoi ?> (năm)</span></div>
    <div class="col-lg-1">Đơn vị khai thác: <span class="chudam"><?= @$model->donvi->ten ?></span></div> 

    <h3 class="box-title">Thông số kỹ thuật</h3>

    <div class="col-lg-2">Hình dạng biển: <span class="chudam"><?= $model->hinhdangbien->ten ?></span></div>
    <div class="col-lg-2">Chiều cao tĩnh không: <span class="chudam"><?= $model->chieucaotinhkhong ?> (m)</span></div>
    <div class="col-lg-2">Loại vật liệu phủ: <span class="chudam"><?= $model->loaivatlieuphu ?></span></div> 
    <div class="col-lg-2">Cỡ chữ: <span class="chudam"><?= $model->bienbao_cochu ?></span></div>
    <div class="col-lg-2">Chiều cao: <span class="chudam"><?= $model->bienbao_chieucao ?> (m)</span></div>
    <div class="col-lg-2">Chiều rộng: <span class="chudam"><?= $model->bienbao_chieurong ?> (m)</span></div> 
    <div class="col-lg-2">Diện tích: <span class="chudam"><?= $model->bienbao_dientich ?> (m<sup>2</sup>)</span></div>
    <div class="col-lg-2">Vật liệu: <span class="chudam"><?= $model->bienbao_vatlieu ?></span></div>
    <div class="col-lg-2">Loại phản quang: <span class="chudam"><?= $model->bienbao_loaiphanquang ?></span></div> 
    <div class="col-lg-2">Cấp phản quang: <span class="chudam"><?= $model->bienbao_capphanquang ?></span></div>
    <div class="col-lg-1">Kiểu gắn biển: <span class="chudam"><?= $model->bienbao_kieuganbien ?></span></div>
    
    <h3 class="box-title">Bố cục biển báo</h3>
    
    <div class="col-lg-2">Hướng mũi tên: <span class="chudam"><?= $model->bocuc_huongmuiten ?> </span></div>
    <div class="col-lg-2">Tên điểm đến: <span class="chudam"><?= $model->bocuc_tendiemden ?></span></div>
    <div class="col-lg-2">K/c tới điểm đến: <span class="chudam"><?= $model->bocuc_khoangcachtoidiemden ?></span></div> 

    <div class="col-lg-2">K/c tới nút giao: <span class="chudam"><?= $model->bocuc_khoangcachtoinutgiao ?> </span></div>
    <div class="col-lg-2">Tuyến số: <span class="chudam"><?= $model->bocuc_tuyenso ?></span></div>
    <div class="col-lg-2">Tên tuyến: <span class="chudam"><?= $model->bocuc_tentuyen ?></span></div> 
    <pagebreak></pagebreak>

    <h3 class="box-title">Lịch sử kiểm tra</h3>

    <pagebreak></pagebreak>
    <h3 class="box-title">Lịch sử bảo trì, sửa chữa</h3>
</div>