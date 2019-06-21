<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TuyenduongSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuyenduong-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'matuyenduong') ?>

    <?= $form->field($model, 'tenduong') ?>

    <?= $form->field($model, 'tentuyen') ?>

    <?= $form->field($model, 'nhanhdanso') ?>

    <?php // echo $form->field($model, 'capduong') ?>

    <?php // echo $form->field($model, 'donviquanly') ?>

    <?php // echo $form->field($model, 'coquanquanly') ?>

    <?php // echo $form->field($model, 'tukmchinh') ?>

    <?php // echo $form->field($model, 'tukmle') ?>

    <?php // echo $form->field($model, 'denkmchinh') ?>

    <?php // echo $form->field($model, 'denkmle') ?>

    <?php // echo $form->field($model, 'vidodau') ?>

    <?php // echo $form->field($model, 'kinhdodau') ?>

    <?php // echo $form->field($model, 'vidocuoi') ?>

    <?php // echo $form->field($model, 'kinhdocuoi') ?>

    <?php // echo $form->field($model, 'loailanduong') ?>

    <?php // echo $form->field($model, 'tinh') ?>

    <?php // echo $form->field($model, 'huyen') ?>

    <?php // echo $form->field($model, 'dieuchinhcotkm') ?>

    <?php // echo $form->field($model, 'chieudaitheocotkm') ?>

    <?php // echo $form->field($model, 'chieudaithucte') ?>

    <?php // echo $form->field($model, 'namhoanthanhxaydung') ?>

    <?php // echo $form->field($model, 'nambatdaukhaithac') ?>

    <?php // echo $form->field($model, 'hanhlangduongbo') ?>

    <?php // echo $form->field($model, 'loaicongtrinhduongbo') ?>

    <?php // echo $form->field($model, 'solanxecogioi') ?>

    <?php // echo $form->field($model, 'chieuronglanxecogioi') ?>

    <?php // echo $form->field($model, 'loaimatduonglanxecogioi') ?>

    <?php // echo $form->field($model, 'loaimatduonglanxethoso') ?>

    <?php // echo $form->field($model, 'chieurongphanduongxechay') ?>

    <?php // echo $form->field($model, 'chieurongmatduong') ?>

    <?php // echo $form->field($model, 'leduong') ?>

    <?php // echo $form->field($model, 'chieuronglegiaco') ?>

    <?php // echo $form->field($model, 'loaiketcaulegiaco') ?>

    <?php // echo $form->field($model, 'chieuronglekhonggiaco') ?>

    <?php // echo $form->field($model, 'viahe') ?>

    <?php // echo $form->field($model, 'chieurongviahe') ?>

    <?php // echo $form->field($model, 'loaiviahe') ?>

    <?php // echo $form->field($model, 'chieurongthoatnuoc') ?>

    <?php // echo $form->field($model, 'tocdothietke') ?>

    <?php // echo $form->field($model, 'tocdotoidacaclan') ?>

    <?php // echo $form->field($model, 'tocdotoithieucaclan') ?>

    <?php // echo $form->field($model, 'loaidiahinh') ?>

    <?php // echo $form->field($model, 'nhietdo') ?>

    <?php // echo $form->field($model, 'luongmuatrungbinh') ?>

    <?php // echo $form->field($model, 'loainenduong') ?>

    <?php // echo $form->field($model, 'anh_daidien') ?>

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
