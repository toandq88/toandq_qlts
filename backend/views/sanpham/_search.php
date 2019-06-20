<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SanphamSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sanpham-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ma_sanpham') ?>

    <?= $form->field($model, 'ten') ?>

    <?= $form->field($model, 'ten_url') ?>

    <?= $form->field($model, 'id_danhmuc') ?>

    <?php // echo $form->field($model, 'id_thuonghieu') ?>

    <?php // echo $form->field($model, 'hinhanh') ?>

    <?php // echo $form->field($model, 'mota_ngan') ?>

    <?php // echo $form->field($model, 'mota') ?>

    <?php // echo $form->field($model, 'baohanh') ?>

    <?php // echo $form->field($model, 'soluong') ?>

    <?php // echo $form->field($model, 'giaban') ?>

    <?php // echo $form->field($model, 'giakhuyenmai') ?>

    <?php // echo $form->field($model, 'khuyenmai') ?>

    <?php // echo $form->field($model, 'sp_banchay') ?>

    <?php // echo $form->field($model, 'sp_noibat') ?>

    <?php // echo $form->field($model, 'sp_moinhap') ?>

    <?php // echo $form->field($model, 'meta_mota') ?>

    <?php // echo $form->field($model, 'meta_tukhoa') ?>

    <?php // echo $form->field($model, 'link_video') ?>

    <?php // echo $form->field($model, 'video_width') ?>

    <?php // echo $form->field($model, 'video_height') ?>

    <?php // echo $form->field($model, 'file_huongdan') ?>

    <?php // echo $form->field($model, 'pk_dikem') ?>

    <?php // echo $form->field($model, 'thutu') ?>

    <?php // echo $form->field($model, 'tinhtrang') ?>

    <?php // echo $form->field($model, 'ngaydang') ?>

    <?php // echo $form->field($model, 'nguoitao') ?>

    <?php // echo $form->field($model, 'nguoisua') ?>

    <?php // echo $form->field($model, 'ngaytao') ?>

    <?php // echo $form->field($model, 'ngaysua') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
