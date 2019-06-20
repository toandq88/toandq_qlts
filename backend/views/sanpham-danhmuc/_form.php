<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use \app\models\SanphamDanhmuc;

/* @var $this yii\web\View */
/* @var $model app\models\SanphamDanhmuc */
/* @var $form yii\widgets\ActiveForm */
?>

<section class="content">
    <?php $form = ActiveForm::begin(); ?>
    <!-- Main content -->
    <div class="row">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Thông tin danh mục</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <div class="col-lg-6">
                    <?= $form->field($model, 'ten')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-6">
                    <?= $form->field($model, 'ten_url')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-6">
                    <?=
                    $form->field($model, 'parents')->dropDownList(
                            ArrayHelper::map(SanphamDanhmuc::find()->where(['parents' => null])->all(), 'id', 'ten'), ['prompt' => " -- Chọn --"]
                    )
                    ?>
                </div>
                <div class="col-lg-6">
                    <?= $form->field($model, 'thutu')->textInput() ?>
                </div>
                <div class="col-lg-6">
                    <?= $form->field($model, 'meta_mota')->textarea(['rows' => 6]) ?>
                </div>
                <div class="col-lg-6">
                    <?= $form->field($model, 'meta_tukhoa')->textarea(['rows' => 6]) ?>
                </div>
                <div class="col-lg-6">
                    <?= $form->field($model, 'hinhanh')->fileInput() ?>
                </div>
                <div class="col-lg-6">
                    <?= $form->field($model, 'tinhtrang')->checkbox() ?>
                </div>
                <div class="col-lg-12">
                    <?= $form->field($model, 'mota')->textarea(['rows' => 6, 'id' => 'editor1']) ?>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <!-- ./row -->
    <div class="row" style="margin-top: 10px; text-align: center">
        <div class="form-group">
            <?= Html::submitButton('Lưu lại', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</section>