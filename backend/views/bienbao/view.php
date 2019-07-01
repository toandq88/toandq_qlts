<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bienbao */

$this->title = 'Số hiệu biển '. $model->bienbao_sohieu.': '.$model->bienbao_tenbien;
$this->params['breadcrumbs'][] = ['label' => 'Biển báo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$this->registerCss(".chudam { font-weight: bolder; }");
\yii\web\YiiAsset::register($this);
?>
<div class="bienbao-view" style="margin-top: 30px;">
    <div class="row">
        <div class="col-lg-6">
            <h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="col-lg-6" style="float: right; text-align: right">
            <?= Html::a(' ', ['update', 'id' => $model->id], ['class' => 'glyphicon glyphicon-pencil btn btn-primary']) ?>
            <?php
            echo Html::a(' ', ['delete', 'id' => $model->id], [
                    'class' => 'glyphicon glyphicon-trash btn btn-danger',
                    'data' => [
                        'confirm' => 'Bạn có chắc chắn muốn xóa thông tin này?',
                        'method' => 'post',
                    ],
                ]);
            ?>
        </div>
    </div>
</div>

<section class="content">
    <div class="row">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Thông tin chung</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad" style="font-size: 12pt;">
                <div class="col-lg-4">Số hiệu biển: <span class="chudam"><?= $model->bienbao_sohieu ?></span></div>
                <div class="col-lg-4">Tên biển: <span class="chudam"><?= $model->bienbao_tenbien ?></span></div>
                <div class="col-lg-4">Tuyến đường: <span class="chudam"><?= $model->tuyenduong->tenduong ?></span></div> 
                
                <div class="col-lg-4" style="margin-top: 15px">
                    Lý trình: <span class="chudam">Km<?= $model->kmchinh . '+' . $model->kmle ?> 
                    <?php 
                    if($model->kmchinh_nhanh != '' || $model->kmle_nhanh != '')
                        echo '(Nhánh: Km'.$model->kmchinh_nhanh . '+' . $model->kmle_nhanh.')';
                    ?>
                    </span>
                </div>
                <div class="col-lg-4" style="margin-top: 15px">Địa phận: <span class="chudam"><?= @$model->vntinh->ten . ' / ' . @$model->vnhuyen->ten . ' / ' . @$model->vnxa->ten ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">
                    Tọa độ: <span class="chudam">(<?= $model->vido . '+' . $model->kinhdo ?>)</span>
                </div>
                
                <div class="col-lg-4" style="margin-top: 15px">Loại làn đường: <span class="chudam"><?= $model->landuong->ten ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Loại lắp đặt các cột: <span class="chudam"><?= $model->loailapdatcaccot ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Loại cột: <span class="chudam"><?= $model->loaicotbien->ten ?></span></div> 
                
                <div class="col-lg-4" style="margin-top: 15px">Loại biển: <span class="chudam"><?= $model->loaibienbao->ten ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Số biển/cột: <span class="chudam"><?= $model->soluongbientrencot ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">K/c từ biển đến tim đường: <span class="chudam"><?= $model->khoangcachtucotdentimduong ?> (m)</span></div> 
                
                <div class="col-lg-4" style="margin-top: 15px">Năm xây dựng: <span class="chudam"><?= $model->namxaydung ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Vòng đời: <span class="chudam"><?= $model->vongdoi ?> (năm)</span></div>
                <div class="col-lg-4" style="margin-top: 15px">Đơn vị khai thác: <span class="chudam"><?= @$model->donvi->ten ?></span></div> 
            </div>
        </div>
        <!-- /.box -->

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Thông số kỹ thuật</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad" style="font-size: 12pt;">
                <div class="col-lg-4" style="margin-top: 15px">Hình dạng biển: <span class="chudam"><?= $model->hinhdangbien->ten ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Chiều cao tĩnh không: <span class="chudam"><?= $model->chieucaotinhkhong ?> (m)</span></div>
                <div class="col-lg-4" style="margin-top: 15px">Loại vật liệu phủ: <span class="chudam"><?= $model->loaivatlieuphu ?></span></div> 
                
                <div class="col-lg-4" style="margin-top: 15px">Cỡ chữ: <span class="chudam"><?= $model->bienbao_cochu ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Chiều cao: <span class="chudam"><?= $model->bienbao_chieucao ?> (m)</span></div>
                <div class="col-lg-4" style="margin-top: 15px">Chiều rộng: <span class="chudam"><?= $model->bienbao_chieurong ?> (m)</span></div> 
                
                <div class="col-lg-4" style="margin-top: 15px">Diện tích: <span class="chudam"><?= $model->bienbao_dientich ?> (m<sup>2</sup>)</span></div>
                <div class="col-lg-4" style="margin-top: 15px">Vật liệu: <span class="chudam"><?= $model->bienbao_vatlieu ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Loại phản quang: <span class="chudam"><?= $model->bienbao_loaiphanquang ?></span></div> 
                
                <div class="col-lg-4" style="margin-top: 15px">Cấp phản quang: <span class="chudam"><?= $model->bienbao_capphanquang ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Kiểu gắn biển: <span class="chudam"><?= $model->bienbao_kieuganbien ?></span></div>
            </div>
        </div>
        <!-- /.col-->
        
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Bố cục biển báo</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad" style="font-size: 12pt;">
                <div class="col-lg-4" style="margin-top: 15px">Hướng mũi tên: <span class="chudam"><?= $model->bocuc_huongmuiten ?> </span></div>
                <div class="col-lg-4" style="margin-top: 15px">Tên điểm đến: <span class="chudam"><?= $model->bocuc_tendiemden ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">K/c tới điểm đến: <span class="chudam"><?= $model->bocuc_khoangcachtoidiemden ?></span></div> 
                
                <div class="col-lg-4" style="margin-top: 15px">K/c tới nút giao: <span class="chudam"><?= $model->bocuc_khoangcachtoinutgiao ?> </span></div>
                <div class="col-lg-4" style="margin-top: 15px">Tuyến số: <span class="chudam"><?= $model->bocuc_tuyenso ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Tên tuyến: <span class="chudam"><?= $model->bocuc_tentuyen ?></span></div> 
            </div>
        </div>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lịch sử kiểm tra</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad" style="font-size: 12pt;">
                
            </div>
        </div>
        
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lịch sử bảo trì, sửa chữa</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad" style="font-size: 12pt;">
                
            </div>
        </div>
        
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Thông tin khác</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad" style="font-size: 12pt;">
                <div class="col-lg-3" style="margin-top: 15px">Người tạo: <span class="chudam"><?= $model->nguoitao ?></span></div>
                <div class="col-lg-3" style="margin-top: 15px">Người sửa: <span class="chudam"><?= $model->nguoisua ?></span></div>
                <div class="col-lg-3" style="margin-top: 15px">Ngày tạo: <span class="chudam"><?= $model->ngaytao ?> </span></div> 
                <div class="col-lg-3" style="margin-top: 15px">Ngày sửa: <span class="chudam"><?= $model->ngaysua ?> </span></div> 
            </div>
        </div>
    </div>
</section>
