<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SanphamDanhmuc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sanpham-danhmuc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ten_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hinhanh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parents')->textInput() ?>

    <?= $form->field($model, 'mota')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_mota')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meta_tukhoa')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'thutu')->textInput() ?>

    <?= $form->field($model, 'tinhtrang')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
