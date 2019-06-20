<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TimkiemTheogia */

$this->title = 'Cập nhật';
$this->params['breadcrumbs'][] = ['label' => 'Khoảng giá tìm kiếm', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="timkiem-theogia-update">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
