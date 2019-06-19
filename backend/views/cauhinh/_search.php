<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CauhinhSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cauhinh-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tieude') ?>

    <?= $form->field($model, 'slogan') ?>

    <?= $form->field($model, 'footer') ?>

    <?= $form->field($model, 'gioithieu') ?>

    <?php // echo $form->field($model, 'mota') ?>

    <?php // echo $form->field($model, 'tukhoa') ?>

    <?php // echo $form->field($model, 'bando') ?>

    <?php // echo $form->field($model, 'hotline1') ?>

    <?php // echo $form->field($model, 'hotline2') ?>

    <?php // echo $form->field($model, 'facebook') ?>

    <?php // echo $form->field($model, 'youtube') ?>

    <?php // echo $form->field($model, 'google') ?>

    <?php // echo $form->field($model, 'sp_moi') ?>

    <?php // echo $form->field($model, 'sp_dacbiet') ?>

    <?php // echo $form->field($model, 'sp_banchay') ?>

    <?php // echo $form->field($model, 'sp_danhmuc') ?>

    <?php // echo $form->field($model, 'sp_cungloai') ?>

    <?php // echo $form->field($model, 'tintuc_1trang') ?>

    <?php // echo $form->field($model, 'tintuc_khac') ?>

    <?php // echo $form->field($model, 'qc_2ben') ?>

    <?php // echo $form->field($model, 'qc_goc_phai') ?>

    <?php // echo $form->field($model, 'back_top') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
