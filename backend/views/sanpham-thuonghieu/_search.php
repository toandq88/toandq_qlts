<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SanphamThuonghieuSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<section class="content">
    <?php
    $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
    ]);
    ?>
    <div class="row">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Tìm kiếm</h3>
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
                    <?= $form->field($model, 'ten') ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'ten_url') ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'website') ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'thutu') ?>
                </div>
                <div class="col-lg-12">
                    <?= Html::submitButton('Kết quả', ['class' => 'btn btn-primary']) ?>
                    <?= Html::resetButton('Nhập lại', ['class' => 'btn btn-outline-secondary']) ?>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <?php ActiveForm::end(); ?>
</section>