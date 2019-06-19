<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TimkiemTheogia */

$this->title = 'Update Timkiem Theogia: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Timkiem Theogias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="timkiem-theogia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
