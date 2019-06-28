<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Donvi;
use backend\models\VnTinh;
use backend\models\VnHuyen;
use backend\models\VnXa;
use app\models\LoaiLanduong;
use app\models\LoaiNenduong;

/* @var $this yii\web\View */
/* @var $model app\models\Tuyenduong */
/* @var $form yii\widgets\ActiveForm */

$link = 'http://' . Yii::$app->getRequest()->serverName . ':81' . Yii::$app->homeUrl;
//echo 'Link: '.$link;
?>
<script src="<?= Yii::getAlias('@web') . '/toandq/js/jquery-1.11.0.js' ?>"></script>
<section class="content">
    <?php $form = ActiveForm::begin(); ?>
    <!-- Main content -->
    <div class="row">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Thông tin chung</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                            title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <div class="col-lg-3">
                    <?= $form->field($model, 'matuyenduong')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'tenduong')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'tentuyen')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'nhanhdanso')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'capduong')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?=
                    $form->field($model, 'loailanduong')->dropDownList(
                            ArrayHelper::map(LoaiLanduong::find()->all(), 'id', 'ten'), ['prompt' => " -- Chọn --"]
                    )
                    ?>
                </div>
                <div class="col-lg-3">
                    <?=
                    $form->field($model, 'donviquanly')->dropDownList(
                            ArrayHelper::map(Donvi::find()->all(), 'id_donvi', 'ten'), ['prompt' => " -- Chọn --"]
                    )
                    ?>
                </div>
                <div class="col-lg-3">
                    <?=
                    $form->field($model, 'coquanquanly')->dropDownList(
                            ArrayHelper::map(Donvi::find()->all(), 'id_donvi', 'ten'), ['prompt' => " -- Chọn --"]
                    )
                    ?>
                </div>
                <div class="col-lg-1">
                    <?= $form->field($model, 'tukmchinh')->textInput(['placeholder' => "chính"]) ?>
                </div>
                <div class="col-lg-1">
                    <?= $form->field($model, 'tukmle')->textInput(['placeholder' => "+ lẻ"]) ?>
                </div>
                <div class="col-lg-1">
                    <?= $form->field($model, 'denkmchinh')->textInput(['placeholder' => "chính"]) ?>
                </div>
                <div class="col-lg-1">
                    <?= $form->field($model, 'denkmle')->textInput(['placeholder' => "+ lẻ"]) ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($model, 'vidodau')->textInput(['maxlength' => true, 'placeholder' => "21.111111"]) ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($model, 'kinhdodau')->textInput(['maxlength' => true, 'placeholder' => "105.111111"]) ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($model, 'vidocuoi')->textInput(['maxlength' => true, 'placeholder' => "21.222222"]) ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($model, 'kinhdocuoi')->textInput(['maxlength' => true, 'placeholder' => "105.222222"]) ?>
                </div>
                <div class="col-lg-2">
                    <?=
                    $form->field($model, 'id_tinh')->dropDownList(
                            ArrayHelper::map(VnTinh::find()->all(), 'id_tinh', 'ten'), [
                        'prompt' => " -- Chọn --",
                        'onchange' => '$.post("' . $link . 'vn-huyen/lists?id_tinh=' . '"+$(this).val(), function(data){
                            $("select#tuyenduong-id_huyen").html(data);
                            $("select#tuyenduong-id_huyen").attr("disabled",false);
                            });'
                    ]);
                    ?><!-- http://localhost:81/toandq_advanced/frontend/web/vn-huyen/lists -->
                </div>
                <div class="col-lg-2">
                    <?=
                    $form->field($model, 'id_huyen')->dropDownList(
                            ArrayHelper::map(VnHuyen::find()->all(), 'id_huyen', 'ten'), [
                        'prompt' => " -- Chọn --",
                        'onchange' => '$.post("' . $link . 'vn-xa/lists?id_huyen=' . '"+$(this).val(), function(data){
                            $("select#tuyenduong-id_xa").html(data);
                            $("select#tuyenduong-id_xa").attr("disabled",false);
                            });',
                        'disabled' => 'true',
                    ]);
                    ?>
                </div>
                <div class="col-lg-2">
                    <?=
                    $form->field($model, 'id_xa')->dropDownList(
                            ArrayHelper::map(VnXa::find()->all(), 'id_xa', 'ten'), [
                        'prompt' => " -- Chọn --",
                        'disabled' => 'true',
                    ]);
                    ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'namhoanthanhxaydung')->textInput(['placeholder' => "yyyy", 'maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'nambatdaukhaithac')->textInput(['placeholder' => "yyyy", 'maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'chieudaitheocotkm')->textInput(['placeholder' => "(km)"]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'chieudaithucte')->textInput(['placeholder' => "(km)"]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'solanxecogioi')->textInput() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'chieuronglanxecogioi')->textInput(['placeholder' => "(m)"]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'chieurongphanduongxechay')->textInput(['placeholder' => "(m)"]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'chieurongmatduong')->textInput(['placeholder' => "(m)"]) ?>
                </div> 
                <div class="col-lg-3">
                    <?= $form->field($model, 'tocdotoidacaclan')->textInput(['placeholder' => "(km/h)"]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'tocdotoithieucaclan')->textInput(['placeholder' => "(km/h)"]) ?>
                </div>                
            </div>
        </div>
        <!-- /.box -->

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Thông tin chi tiết</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <div class="col-lg-3">            
                    <?= $form->field($model, 'dieuchinhcotkm')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'hanhlangduongbo')->textInput(['placeholder' => "(m)"]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'loaicongtrinhduongbo')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'loaimatduonglanxecogioi')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'loaimatduonglanxethoso')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'leduong')->textInput(['placeholder' => "(m)", 'maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'chieuronglegiaco')->textInput() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'loaiketcaulegiaco')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'chieuronglekhonggiaco')->textInput() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'viahe')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'chieurongviahe')->textInput(['placeholder' => "(m)"]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'loaiviahe')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'chieurongthoatnuoc')->textInput(['placeholder' => "(m)"]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'tocdothietke')->textInput(['placeholder' => "(km/h)"]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'loaidiahinh')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'nhietdo')->textInput() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'luongmuatrungbinh')->textInput(['placeholder' => "(mm/năm)"]) ?>
                </div>
                <div class="col-lg-3">
                    <?=
                    $form->field($model, 'loainenduong')->dropDownList(
                            ArrayHelper::map(LoaiNenduong::find()->all(), 'id', 'ten'), ['prompt' => " -- Chọn --"]
                    )
                    ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'anh_daidien')->fileInput() ?>
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