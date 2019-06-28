<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MucdoBaotriSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mucdo-baotri-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ten') ?>

    <?= $form->field($model, 'thutu') ?>

    <?= $form->field($model, 'nguoitao') ?>

    <?= $form->field($model, 'ngaytao') ?>

    <?php // echo $form->field($model, 'nguoisua') ?>

    <?php // echo $form->field($model, 'ngaysua') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
