<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tuyenduong */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Tuyến đường', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuyenduong-create">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
