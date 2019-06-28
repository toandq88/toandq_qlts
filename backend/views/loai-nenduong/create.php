<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LoaiNenduong */

$this->title = 'Loại nền đường';
$this->params['breadcrumbs'][] = ['label' => 'Loại nền đường', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loai-nenduong-create">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
