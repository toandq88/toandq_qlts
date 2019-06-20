<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use \app\models\SanphamDanhmuc;
use app\models\SanphamThuonghieu;

/* @var $this yii\web\View */
/* @var $model app\models\Sanpham */
/* @var $form yii\widgets\ActiveForm */
?>

<section class="content">
    <?php $form = ActiveForm::begin(); ?>
    <!-- Main content -->
    <div class="row">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Thông tin sản phẩm</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <div class="col-lg-3">
                    <?= $form->field($model, 'ma_sanpham')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?php /*
                      $form->field($model, 'id_danhmuc')->dropDownList(
                      ArrayHelper::map(SanphamDanhmuc::find()->where(['parents' => null])->all(), 'id', 'ten'), ['prompt' => " -- Chọn --"]
                      ) */
                    ?>
                    <?=
                    $form->field($model, 'id_danhmuc')->dropDownList(SanphamDanhmuc::getDacap(), ['prompt' => ' -- Chọn --', 'class' => 'form-control']);
                    ?>
                </div>
                <div class="col-lg-3">
                    <?=
                    $form->field($model, 'id_thuonghieu')->dropDownList(
                            ArrayHelper::map(SanphamThuonghieu::find()->all(), 'id', 'ten'), ['prompt' => " -- Chọn --"]
                    )
                    ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'hinhanh')->fileInput() ?>
                </div>
                <div class="col-lg-6">
                    <?= $form->field($model, 'ten')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-6">
                    <?= $form->field($model, 'ten_url')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'giaban')->textInput() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'giakhuyenmai')->textInput() ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($model, 'baohanh')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($model, 'soluong')->textInput() ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($model, 'thutu')->textInput() ?>
                </div>
                <div class="col-lg-6">
                    <?= $form->field($model, 'meta_mota')->textarea(['rows' => 4]) ?>
                </div>
                <div class="col-lg-6">
                    <?= $form->field($model, 'meta_tukhoa')->textarea(['rows' => 4]) ?>
                </div>
                <div class="col-lg-12">
                    <?= $form->field($model, 'mota_ngan')->textarea(['rows' => 4, 'id' => 'editor1']) ?>
                </div>
                <div class="col-lg-12">
                    <?= $form->field($model, 'mota')->textarea(['rows' => 4, 'id' => 'editor2']) ?>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Thông số hiển thị</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <div class="col-lg-6">
                    <?= $form->field($model, 'khuyenmai')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'sp_banchay')->checkbox() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'sp_noibat')->checkbox() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'sp_moinhap')->checkbox() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'tinhtrang')->checkbox() ?>
                </div>
                <div class="col-lg-6">
                    <?= $form->field($model, 'link_video')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'video_width')->textInput() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'video_height')->textInput() ?>
                </div>
                <div class="col-lg-6">
                    <?= $form->field($model, 'pk_dikem')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-6">
                    <?= $form->field($model, 'file_huongdan')->fileInput() ?>
                </div>
            </div>
            <!-- /.col-->
        </div>
    </div>
    <!-- ./row -->
    <div class="row" style="margin-top: 10px; text-align: center">
        <div class="form-group">
            <?= Html::submitButton('Lưu lại', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</section>
