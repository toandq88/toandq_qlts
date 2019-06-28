<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MucdoBaotri */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Mức độ bảo trì', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mucdo-baotri-create">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
