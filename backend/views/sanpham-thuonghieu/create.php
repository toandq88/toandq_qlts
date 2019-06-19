<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SanphamThuonghieu */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Thương hiệu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanpham-thuonghieu-create">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
