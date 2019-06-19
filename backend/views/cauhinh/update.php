<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cauhinh */

$this->title = $model->tieude;
$this->params['breadcrumbs'][] = ['label' => 'Cấu hình', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tieude, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';

$this->registerCssFile(Yii::$app->homeUrl . '/toandq/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');

$this->registerJsFile(Yii::$app->homeUrl . 'toandq/bower_components/fastclick/lib/fastclick.js');
$this->registerJsFile(Yii::$app->homeUrl . 'toandq/dist/js/demo.js');
$this->registerJsFile(Yii::$app->homeUrl . 'toandq/bower_components/ckeditor/ckeditor.js');
$this->registerJsFile(Yii::$app->homeUrl . 'toandq/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');
        
$this->registerJs(
    "$(function () {
    CKEDITOR.replace('editor1')
    CKEDITOR.replace('editor2')
    $('.textarea').wysihtml5()
  })"
);
?>
<div class="cauhinh-update">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
