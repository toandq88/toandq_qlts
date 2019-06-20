<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TimkiemTheogia */

$this->title = 'Khoảng giá tìm kiếm: '.$model->gia_tri1 .' - '.$model->gia_tri2;
$this->params['breadcrumbs'][] = ['label' => 'Khoảng giá tìm kiếm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$this->registerCss('table.detail-view th {width: 25%;} table.detail-view td { width: 75%;}')
?>
<div class="timkiem-theogia-view" style="margin-top: 30px;">
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-lg-6">
            <h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="col-lg-6" style="float: right; text-align: right">
            <?= Html::a(' ', ['update', 'id' => $model->id], ['class' => 'glyphicon glyphicon-pencil btn btn-primary']) ?>
            <?= Html::a(' ', ['delete', 'id' => $model->id], [
            'class' => 'glyphicon glyphicon-trash btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có chắc chắn muốn xóa thông tin này không?',
                'method' => 'post',
            ],
        ]) ?>
        </div>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'loai',
            'gia_tri1',
            'gia_tri2',
        ],
    ]) ?>
</div>
