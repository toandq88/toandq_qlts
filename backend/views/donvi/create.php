<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Donvi */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Đơn vị', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donvi-create">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
