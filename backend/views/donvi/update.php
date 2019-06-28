<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Donvi */

$this->title = 'Cập nhật: ' . $model->tenviettat;
$this->params['breadcrumbs'][] = ['label' => 'Đơn vị', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tenviettat, 'url' => ['view', 'id' => $model->id_donvi]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="donvi-update">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
