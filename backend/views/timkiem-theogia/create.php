<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TimkiemTheogia */

$this->title = 'Create Timkiem Theogia';
$this->params['breadcrumbs'][] = ['label' => 'Timkiem Theogias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="timkiem-theogia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
