<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BienbaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bienbao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_tuyenduong') ?>

    <?= $form->field($model, 'id_donvikhaithac') ?>

    <?= $form->field($model, 'kmchinh') ?>

    <?= $form->field($model, 'kmle') ?>

    <?php // echo $form->field($model, 'kmchinh_nhanh') ?>

    <?php // echo $form->field($model, 'kmle_nhanh') ?>

    <?php // echo $form->field($model, 'tennhanh') ?>

    <?php // echo $form->field($model, 'vido') ?>

    <?php // echo $form->field($model, 'kinhdo') ?>

    <?php // echo $form->field($model, 'loailanduong') ?>

    <?php // echo $form->field($model, 'id_tinh') ?>

    <?php // echo $form->field($model, 'id_huyen') ?>

    <?php // echo $form->field($model, 'id_xa') ?>

    <?php // echo $form->field($model, 'loailapdatcaccot') ?>

    <?php // echo $form->field($model, 'loaicot') ?>

    <?php // echo $form->field($model, 'loaibien') ?>

    <?php // echo $form->field($model, 'hinhdang') ?>

    <?php // echo $form->field($model, 'khoangcachtucotdentimduong') ?>

    <?php // echo $form->field($model, 'chieucaotinhkhong') ?>

    <?php // echo $form->field($model, 'loaivatlieuphu') ?>

    <?php // echo $form->field($model, 'soluongbientrencot') ?>

    <?php // echo $form->field($model, 'namxaydung') ?>

    <?php // echo $form->field($model, 'vongdoi') ?>

    <?php // echo $form->field($model, 'bienbao_sohieu') ?>

    <?php // echo $form->field($model, 'bienbao_tenbien') ?>

    <?php // echo $form->field($model, 'bienbao_cochu') ?>

    <?php // echo $form->field($model, 'bienbao_chieucao') ?>

    <?php // echo $form->field($model, 'bienbao_chieurong') ?>

    <?php // echo $form->field($model, 'bienbao_dientich') ?>

    <?php // echo $form->field($model, 'bienbao_vatlieu') ?>

    <?php // echo $form->field($model, 'bienbao_loaiphanquang') ?>

    <?php // echo $form->field($model, 'bienbao_capphanquang') ?>

    <?php // echo $form->field($model, 'bienbao_kieuganbien') ?>

    <?php // echo $form->field($model, 'bocuc_huongmuiten') ?>

    <?php // echo $form->field($model, 'bocuc_tendiemden') ?>

    <?php // echo $form->field($model, 'bocuc_khoangcachtoidiemden') ?>

    <?php // echo $form->field($model, 'bocuc_khoangcachtoinutgiao') ?>

    <?php // echo $form->field($model, 'bocuc_tuyenso') ?>

    <?php // echo $form->field($model, 'bocuc_tentuyen') ?>

    <?php // echo $form->field($model, 'nguoitao') ?>

    <?php // echo $form->field($model, 'ngaytao') ?>

    <?php // echo $form->field($model, 'nguoisua') ?>

    <?php // echo $form->field($model, 'ngaysua') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
