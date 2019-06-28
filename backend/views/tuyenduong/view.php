<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tuyenduong */

$this->title = $model->tenduong;
$this->params['breadcrumbs'][] = ['label' => 'Tuyến đường', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$this->registerCss(".chudam { font-weight: bolder; }");

\yii\web\YiiAsset::register($this);
?>
<div class="tuyenduong-view" style="margin-top: 30px">
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-lg-9">
            <h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="col-lg-3" style="float: right; text-align: right">
            <?= Html::a(' ', ['update', 'id' => $model->id], ['class' => 'glyphicon glyphicon-pencil btn btn-primary']) ?>
            <?= Html::a(' ', ['delete', 'id' => $model->id], [
            'class' => 'glyphicon glyphicon-trash btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có chắc chắn muốn xóa thông tin này không?',
                'method' => 'post',
            ],
        ]) ?>
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
                <div class="col-lg-4">Mã tuyến đường: <span class="chudam"><?= $model->matuyenduong ?></span></div>
                <div class="col-lg-4">Tên đường: <span class="chudam"><?= $model->tenduong ?></span></div>
                <div class="col-lg-4">Tên tuyến: <span class="chudam"><?= $model->tentuyen ?></span></div> 
                
                <div class="col-lg-4" style="margin-top: 15px">Nhánh dẫn số: <span class="chudam"><?= $model->nhanhdanso ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Cấp đường: <span class="chudam"><?= $model->capduong ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Loại làn đường: <span class="chudam"><?= $model->landuong->ten ?></span></div>
                
                <div class="col-lg-4" style="margin-top: 15px">
                    Lý trình: <span class="chudam">Km<?= $model->tukmchinh . '+' . $model->tukmle ?> ÷ Km<?= $model->denkmchinh . '+' . $model->denkmle ?></span>
                </div>
                <div class="col-lg-4" style="margin-top: 15px">Địa phận: <span class="chudam"><?= @$model->vntinh->ten . ' / ' . @$model->vnhuyen->ten . ' / ' . @$model->vnxa->ten ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Năm điều chỉnh cột km: <span class="chudam"><?= $model->dieuchinhcotkm ?></span></div>
                
                <div class="col-lg-4" style="margin-top: 15px">Chiều dài theo cột km: <span class="chudam"><?= $model->chieudaitheocotkm ?> (km)</span></div> 
                <div class="col-lg-4" style="margin-top: 15px">Chiều dài thực tế: <span class="chudam"><?= $model->chieudaithucte ?> (km)</span></div>
                <div class="col-lg-4" style="margin-top: 15px">Năm hoàn thành xây dựng: <span class="chudam"><?= $model->namhoanthanhxaydung ?></span></div>
                
                <div class="col-lg-4" style="margin-top: 15px">Năm bắt đầu khai thác: <span class="chudam"><?= $model->nambatdaukhaithac ?></span></div> 
                <div class="col-lg-4" style="margin-top: 15px">Số làn xe cơ giới: <span class="chudam"><?= $model->solanxecogioi ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Chiều rộng làn xe cơ giới: <span class="chudam"><?= $model->chieuronglanxecogioi ?> (m)</span></div>
                
                <div class="col-lg-4" style="margin-top: 15px">Chiều rộng phần xe chạy: <span class="chudam"><?= $model->chieurongphanduongxechay ?> (m)</span></div> 
                <div class="col-lg-4" style="margin-top: 15px">Tốc độ tối đa các làn: <span class="chudam"><?= $model->tocdotoidacaclan ?> (km/h)</span></div>
                <div class="col-lg-4" style="margin-top: 15px">Tốc độ tối thiểu các làn: <span class="chudam"><?= $model->tocdotoithieucaclan ?> (km/h)</span></div>
                
                <div class="col-lg-4" style="margin-top: 15px">Tốc độ thiết kế: <span class="chudam"><?= $model->tocdothietke ?> (km/h)</span></div> 
                <div class="col-lg-4" style="margin-top: 15px">Đơn vị quản lý: <span class="chudam"><?= $model->donvi->ten ?></span></div> 
                <div class="col-lg-4" style="margin-top: 15px">Cơ quan quản lý: <span class="chudam"><?= $model->coquan->ten ?></span></div> 
                
                <div class="col-lg-12" style="margin-top: 15px">
                    Tọa độ: <span class="chudam">(<?= $model->vidodau . '+' . $model->kinhdodau ?>) ÷ (Km<?= $model->vidocuoi . '+' . $model->kinhdocuoi ?>)</span>
                </div>
            </div>
        </div>
        <!-- /.box -->

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Thông tin chi tiết</h3>
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
                <div class="col-lg-4" style="margin-top: 15px">Hành lang đường bộ: <span class="chudam"><?= $model->hanhlangduongbo ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Loại công trình đường bộ: <span class="chudam"><?= $model->loaicongtrinhduongbo ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Loại mặt đường làn xe cơ giới: <span class="chudam"><?= $model->loaimatduonglanxecogioi ?></span></div> 
                
                <div class="col-lg-4" style="margin-top: 15px">Loại mặt đường làn xe thô sơ: <span class="chudam"><?= $model->loaimatduonglanxethoso ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Chiều rộng phần đường xe chạy: <span class="chudam"><?= $model->chieurongphanduongxechay ?> (m)</span></div>
                <div class="col-lg-4" style="margin-top: 15px">Chiều rộng mặt đường: <span class="chudam"><?= $model->chieurongmatduong ?></span> (m)</div> 
                
                <div class="col-lg-4" style="margin-top: 15px">Lề đường: <span class="chudam"><?= $model->leduong ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Chiều rộng lề gia cố: <span class="chudam"><?= $model->chieuronglegiaco ?> (m)</span></div>
                <div class="col-lg-4" style="margin-top: 15px">Loại kết cấu lề gia cố: <span class="chudam"><?= $model->loaiketcaulegiaco ?></span></div> 
                
                <div class="col-lg-4" style="margin-top: 15px">Chiều rộng lề không gia cố: <span class="chudam"><?= $model->chieuronglekhonggiaco ?> (m)</span></div>
                <div class="col-lg-4" style="margin-top: 15px">Vỉa hè: <span class="chudam"><?= $model->viahe ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Chiều rộng vỉa hè: <span class="chudam"><?= $model->chieurongviahe ?> (m)</span></div> 
                
                <div class="col-lg-4" style="margin-top: 15px">Loại vỉa hè: <span class="chudam"><?= $model->loaiviahe ?></span></div>
                <div class="col-lg-4" style="margin-top: 15px">Chiều rộng thoát nước: <span class="chudam"><?= $model->chieurongthoatnuoc ?> (m)</span></div>
                <div class="col-lg-4" style="margin-top: 15px">Loại địa hình: <span class="chudam"><?= $model->loaidiahinh ?> </span></div> 
                
                <div class="col-lg-4" style="margin-top: 15px">Nhiệt độ: <span class="chudam"><?= $model->nhietdo ?> <sup>0</sup>C</span></div>
                <div class="col-lg-4" style="margin-top: 15px">Lượng mưa trung bình/năm: <span class="chudam"><?= $model->luongmuatrungbinh ?> (mm/năm)</span></div>
                <div class="col-lg-4" style="margin-top: 15px">Loại nền đường: <span class="chudam"><?= $model->nenduong->ten ?> </span></div> 
                
                <div class="col-lg-12" style="margin-top: 15px; text-align: center;">
                <?php
                if($model ->anh_daidien != ''){
                    echo '<img  src="'.Yii::$app->homeUrl . '/uploads/images/tuyenduong/' . $model->anh_daidien.'" style="width:69%">';
                }
                ?>
                </div> 
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
        <!-- /.col-->
    </div>
</section>
