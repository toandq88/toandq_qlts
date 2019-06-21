<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tuyenduong */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuyenduong-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'matuyenduong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tenduong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tentuyen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nhanhdanso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'capduong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'donviquanly')->textInput() ?>

    <?= $form->field($model, 'coquanquanly')->textInput() ?>

    <?= $form->field($model, 'tukmchinh')->textInput() ?>

    <?= $form->field($model, 'tukmle')->textInput() ?>

    <?= $form->field($model, 'denkmchinh')->textInput() ?>

    <?= $form->field($model, 'denkmle')->textInput() ?>

    <?= $form->field($model, 'vidodau')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kinhdodau')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vidocuoi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kinhdocuoi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loailanduong')->textInput() ?>

    <?= $form->field($model, 'tinh')->textInput() ?>

    <?= $form->field($model, 'huyen')->textInput() ?>

    <?= $form->field($model, 'dieuchinhcotkm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chieudaitheocotkm')->textInput() ?>

    <?= $form->field($model, 'chieudaithucte')->textInput() ?>

    <?= $form->field($model, 'namhoanthanhxaydung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nambatdaukhaithac')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hanhlangduongbo')->textInput() ?>

    <?= $form->field($model, 'loaicongtrinhduongbo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'solanxecogioi')->textInput() ?>

    <?= $form->field($model, 'chieuronglanxecogioi')->textInput() ?>

    <?= $form->field($model, 'loaimatduonglanxecogioi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loaimatduonglanxethoso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chieurongphanduongxechay')->textInput() ?>

    <?= $form->field($model, 'chieurongmatduong')->textInput() ?>

    <?= $form->field($model, 'leduong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chieuronglegiaco')->textInput() ?>

    <?= $form->field($model, 'loaiketcaulegiaco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chieuronglekhonggiaco')->textInput() ?>

    <?= $form->field($model, 'viahe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chieurongviahe')->textInput() ?>

    <?= $form->field($model, 'loaiviahe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chieurongthoatnuoc')->textInput() ?>

    <?= $form->field($model, 'tocdothietke')->textInput() ?>

    <?= $form->field($model, 'tocdotoidacaclan')->textInput() ?>

    <?= $form->field($model, 'tocdotoithieucaclan')->textInput() ?>

    <?= $form->field($model, 'loaidiahinh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nhietdo')->textInput() ?>

    <?= $form->field($model, 'luongmuatrungbinh')->textInput() ?>

    <?= $form->field($model, 'loainenduong')->textInput() ?>

    <?= $form->field($model, 'anh_daidien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nguoitao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ngaytao')->textInput() ?>

    <?= $form->field($model, 'nguoisua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ngaysua')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
