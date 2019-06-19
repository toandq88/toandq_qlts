<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SanphamDanhmuc */

$this->title = 'Create Sanpham Danhmuc';
$this->params['breadcrumbs'][] = ['label' => 'Sanpham Danhmucs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanpham-danhmuc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
