<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Donvi */
/* @var $form yii\widgets\ActiveForm */

$this->registerCssFile(Yii::$app->homeUrl . '/toandq/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');

$this->registerJsFile(Yii::$app->homeUrl . 'toandq/bower_components/fastclick/lib/fastclick.js');
$this->registerJsFile(Yii::$app->homeUrl . 'toandq/dist/js/demo.js');
$this->registerJsFile(Yii::$app->homeUrl . 'toandq/bower_components/ckeditor/ckeditor.js');
$this->registerJsFile(Yii::$app->homeUrl . 'toandq/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');

$this->registerJs(
        "$(function () {
    CKEDITOR.replace('editor1')
    $('.textarea').wysihtml5()
  })"
);
?>

<section class="content">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Thông tin đơn vị</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                            title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <div class="col-lg-6">
                    <?= $form->field($model, 'ten')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'tenviettat')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-12">
                    <?= $form->field($model, 'diachi')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'dienthoai')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?=
                    $form->field($model, 'loaidonvi')->dropdownList(
                            [
                        '1' => ' - Đơn vị chủ quản',
                        '2' => ' - Đơn vị quản lý, vận hành',
                        '3' => ' - Đơn vị xây dựng, bảo trì',
                            ], ['prompt' => '-- Chọn --']
                    )
                    ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'hinhanh')->fileInput() ?>
                </div>
                <div class="col-lg-12">
                    <?= $form->field($model, 'mota')->textarea(['rows' => 6, 'id' => 'editor1']) ?>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
        <div class="row" style="margin-top: 10px; text-align: center">
            <div class="form-group">
                <?= Html::submitButton('Lưu lại', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</section>