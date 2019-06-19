<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cauhinh */
/* @var $form yii\widgets\ActiveForm */
?>
<section class="content">
    <?php $form = ActiveForm::begin(); ?>
    <!-- Main content -->
    <div class="row">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Thông tin tìm kiếm, liên hệ</h3>
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
                    <?= $form->field($model, 'tieude')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-6">
                    <?= $form->field($model, 'slogan')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-12">
                    <?= $form->field($model, 'footer')->textarea(['rows' => 4, 'id' => 'editor1']) ?>
                </div>
                <div class="col-lg-12">
                    <?= $form->field($model, 'gioithieu')->textarea(['rows' => 4, 'id' => 'editor2']) ?>
                </div>
                <div class="col-lg-4">
                    <?= $form->field($model, 'mota')->textarea(['rows' => 6]) ?>
                </div>
                <div class="col-lg-4">
                    <?= $form->field($model, 'tukhoa')->textarea(['rows' => 6]) ?>
                </div>
                <div class="col-lg-4">
                    <?= $form->field($model, 'bando')->textarea(['rows' => 6]) ?>
                </div>
            </div>
        </div>
        <!-- /.box -->

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
                <div class="col-lg-3">
                    <?= $form->field($model, 'hotline1')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'hotline2')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'youtube')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'google')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'sp_moi')->textInput() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'sp_dacbiet')->textInput() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'sp_banchay')->textInput() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'sp_danhmuc')->textInput() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'sp_cungloai')->textInput() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'tintuc_1trang')->textInput() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'tintuc_khac')->textInput() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'qc_2ben')->checkbox() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'qc_goc_phai')->checkbox() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'back_top')->checkbox() ?>
                </div>
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
    <?php ActiveForm::end(); ?>
</section>