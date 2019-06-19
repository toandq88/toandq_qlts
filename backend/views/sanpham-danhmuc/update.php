<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SanphamDanhmuc */

$this->title = 'Update Sanpham Danhmuc: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sanpham Danhmucs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sanpham-danhmuc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
