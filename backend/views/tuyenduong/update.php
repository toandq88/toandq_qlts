<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tuyenduong */

$this->title = $model->tenduong;
$this->params['breadcrumbs'][] = ['label' => 'Tuyến đường', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tenduong, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="tuyenduong-update">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
