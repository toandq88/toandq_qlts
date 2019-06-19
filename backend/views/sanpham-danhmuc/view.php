<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SanphamDanhmuc */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sanpham Danhmucs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sanpham-danhmuc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'ten',
            'ten_url:url',
            'hinhanh',
            'parents',
            'mota:ntext',
            'meta_mota:ntext',
            'meta_tukhoa:ntext',
            'thutu',
            'tinhtrang',
        ],
    ]) ?>

</div>
