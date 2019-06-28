<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Tuyenduong;
use app\models\Donvi;
use backend\models\VnTinh;
use backend\models\VnHuyen;
use backend\models\VnXa;
use app\models\LoaiLanduong;
use app\models\BienbaoLoai;

/* @var $this yii\web\View */
/* @var $model app\models\Bienbao */
/* @var $form yii\widgets\ActiveForm */
$link = 'http://' . Yii::$app->getRequest()->serverName . ':81' . Yii::$app->homeUrl;
//echo 'Link: '.$link;
?>
<script src="<?= Yii::getAlias('@web') . '/toandq/js/jquery-1.11.0.js' ?>"></script>
<section class="content">
    <?php $form = ActiveForm::begin(); ?>
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
                    <?=
                    $form->field($model, 'id_tuyenduong')->dropDownList(
                            ArrayHelper::map(Tuyenduong::find()->all(), 'matuyenduong', 'tenduong'), ['prompt' => " -- Chọn --"]
                    )
                    ?>
                </div>
                <div class="col-lg-3">
                    <?=
                    $form->field($model, 'id_donvikhaithac')->dropDownList(
                            ArrayHelper::map(Donvi::find()->all(), 'id_donvi', 'ten'), ['prompt' => " -- Chọn --"]
                    )
                    ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'bienbao_sohieu')->textInput(['placeholder' => "437", 'maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'bienbao_tenbien')->textInput(['placeholder' => "Đường cao tốc", 'maxlength' => true]) ?>
                </div>
                <div class="col-lg-1">
                    <?= $form->field($model, 'kmchinh')->textInput(['placeholder' => "chính"]) ?>
                </div>
                <div class="col-lg-1">
                    <?= $form->field($model, 'kmle')->textInput(['placeholder' => "+ lẻ"]) ?>
                </div>
                <div class="col-lg-1">
                    <?= $form->field($model, 'kmchinh_nhanh')->textInput(['placeholder' => "chính"]) ?>
                </div>
                <div class="col-lg-1">
                    <?= $form->field($model, 'kmle_nhanh')->textInput(['placeholder' => "+ lẻ"]) ?>
                </div>
                <div class="col-lg-4">
                    <?= $form->field($model, 'vido')->textInput(['maxlength' => true, 'placeholder' => "21.111111"]) ?>
                </div>
                <div class="col-lg-4">
                    <?= $form->field($model, 'kinhdo')->textInput(['maxlength' => true, 'placeholder' => "105.111111"]) ?>
                </div>
                <div class="col-lg-2">
                    <?=
                    $form->field($model, 'id_tinh')->dropDownList(
                            ArrayHelper::map(VnTinh::find()->all(), 'id_tinh', 'ten'), [
                        'prompt' => " -- Chọn --",
                        'onchange' => '$.post("' . $link . 'vn-huyen/lists?id_tinh=' . '"+$(this).val(), function(data){
                            $("select#bienbao-id_huyen").html(data);
                            $("select#bienbao-id_huyen").attr("disabled",false);
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
                            $("select#bienbao-id_xa").html(data);
                            $("select#bienbao-id_xa").attr("disabled",false);
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
                <div class="col-lg-2">
                    <?=
                    $form->field($model, 'loailanduong')->dropDownList(
                            ArrayHelper::map(LoaiLanduong::find()->all(), 'id', 'ten'), ['prompt' => " -- Chọn --"]
                    )
                    ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($model, 'loailapdatcaccot')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-2">
                    <?=
                    $form->field($model, 'loaicot')->dropDownList(
                            ArrayHelper::map(BienbaoLoai::find()->where(['loai'=>'BIENBAO_LOAICOT'])->all(), 'id', 'ten'), ['prompt' => " -- Chọn --"]
                    )
                    ?>
                </div>
                <div class="col-lg-2">
                    <?=
                    $form->field($model, 'loaibien')->dropDownList(
                            ArrayHelper::map(BienbaoLoai::find()->where(['loai'=>'BIENBAO_LOAIBIEN'])->all(), 'id', 'ten'), ['prompt' => " -- Chọn --"]
                    )
                    ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($model, 'soluongbientrencot')->textInput(['placeholder' => "1", 'maxlength' => true]) ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($model, 'namxaydung')->textInput(['placeholder' => "yyyy",'maxlength' => true]) ?>
                </div>
                <div class="col-lg-2">
                    <?= $form->field($model, 'vongdoi')->textInput(['placeholder' => "năm"]) ?>
                </div>
                <div class="col-lg-4">
                    <?= $form->field($model, 'khoangcachtucotdentimduong')->textInput(['placeholder' => "(m)"]) ?>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Thông số kỹ thuật</h3>
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
                    <?=
                    $form->field($model, 'hinhdang')->dropDownList(
                            ArrayHelper::map(BienbaoLoai::find()->where(['loai'=>'BIENBAO_HINHDANG'])->all(), 'id', 'ten'), ['prompt' => " -- Chọn --"]
                    )
                    ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'chieucaotinhkhong')->textInput(['placeholder' => "(m)"]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'loaivatlieuphu')->textInput(['maxlength' => true]) ?>
                </div>                
                <div class="col-lg-3">
                    <?= $form->field($model, 'bienbao_cochu')->textInput() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'bienbao_chieucao')->textInput(['placeholder' => "(m)"]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'bienbao_chieurong')->textInput(['placeholder' => "(m)"]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'bienbao_dientich')->textInput(['placeholder' => "(m2)"]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'bienbao_vatlieu')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'bienbao_loaiphanquang')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'bienbao_capphanquang')->textInput() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'bienbao_kieuganbien')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Bố cục biển báo</h3>
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
                    <?= $form->field($model, 'bocuc_huongmuiten')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'bocuc_tendiemden')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'bocuc_khoangcachtoidiemden')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'bocuc_khoangcachtoinutgiao')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'bocuc_tuyenso')->textInput() ?>
                </div>
                <div class="col-lg-3">
                    <?= $form->field($model, 'bocuc_tentuyen')->textInput(['maxlength' => true]) ?>
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
    </div>
    <?php ActiveForm::end(); ?>
</section>
