<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CauhinhSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Thông tin cấu hình Website';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cauhinh-index">
    <h3><?= Html::encode($this->title) ?></h3>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'tieude',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:left;']
            ],
            [
                'attribute' => 'slogan',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:left;']
            ],
            [
                'attribute' => 'footer',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
                'format' => 'html',
            ],
            [
                'attribute' => 'gioithieu',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
                'format' => 'html',
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'text-align:center'],
                'headerOptions' => ['style' => 'text-align:center'],
                'template' => '{view} {update}',
            ],
        ],
    ]);
    ?>


</div>
