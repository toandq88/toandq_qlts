<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\VnTinhSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tỉnh / Thành phố';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vn-tinh-index" style="margin: 30px">
    <div class="row">
        <div class="col-lg-6">
            <h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="col-lg-6" style="float: right; text-align: right">
            <?= Html::a(' ', ['create'], ['class' => 'glyphicon glyphicon-plus-sign btn btn-primary']) ?>
        </div>
    </div>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'id_tinh',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'ten',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'loai',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width:260px; text-align:center'],
                'headerOptions' => ['style' => 'text-align:center'],
                'header'=>'Thao tác',
                'template' => '{view} ',
            ],
        ],
        'pager' => [
            'firstPageLabel' => 'Trang đầu',
            'lastPageLabel' => 'Trang cuối',
            'maxButtonCount' => 5,
        ],
    ]); ?>
</div>
