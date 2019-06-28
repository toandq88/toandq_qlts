<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LoaiLanduong */

$this->title = $model->ten;
$this->params['breadcrumbs'][] = ['label' => 'Loại làn đường', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="donvi-view" style="margin-top: 30px;">
    <div class="row">
        <div class="col-lg-6">
            <h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="col-lg-6" style="float: right; text-align: right">
            <?= Html::a(' ', ['update', 'id' => $model->id], ['class' => 'glyphicon glyphicon-pencil btn btn-primary']) ?>
            <?php
            echo Html::a(' ', ['delete', 'id' => $model->id], [
                    'class' => 'glyphicon glyphicon-trash btn btn-danger',
                    'data' => [
                        'confirm' => 'Bạn có chắc chắn muốn xóa thông tin này?',
                        'method' => 'post',
                    ],
                ]);
            ?>
        </div>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'ten',
            'thutu',
        ],
    ]) ?>
</div>
