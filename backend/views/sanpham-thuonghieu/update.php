<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SanphamThuonghieu */

$this->title = $model->ten;
$this->params['breadcrumbs'][] = ['label' => 'Thương hiệu', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ten, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="sanpham-thuonghieu-update">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
