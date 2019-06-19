<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SanphamDanhmucSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sanpham-danhmuc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ten') ?>

    <?= $form->field($model, 'ten_url') ?>

    <?= $form->field($model, 'hinhanh') ?>

    <?= $form->field($model, 'parents') ?>

    <?php // echo $form->field($model, 'mota') ?>

    <?php // echo $form->field($model, 'meta_mota') ?>

    <?php // echo $form->field($model, 'meta_tukhoa') ?>

    <?php // echo $form->field($model, 'thutu') ?>

    <?php // echo $form->field($model, 'tinhtrang') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
