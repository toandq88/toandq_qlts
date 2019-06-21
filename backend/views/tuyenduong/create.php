<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tuyenduong */

$this->title = 'Create Tuyenduong';
$this->params['breadcrumbs'][] = ['label' => 'Tuyenduongs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuyenduong-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
