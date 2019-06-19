<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TimkiemTheogia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="timkiem-theogia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'loai')->textInput() ?>

    <?= $form->field($model, 'gia_tri1')->textInput() ?>

    <?= $form->field($model, 'gia_tri2')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
