<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MucdoBaotri */
/* @var $form yii\widgets\ActiveForm */
?>

<section class="content">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Thông tin mức độ kiểm tra</h3>
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
                <div class="col-lg-6">
                    <?= $form->field($model, 'thutu')->textInput() ?>
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
    </div>
</section>