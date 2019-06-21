<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use backend\models\VnHuyen;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\VnXaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Xã / Phường';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vn-xa-index" style="margin-top: 30px;">
    <div class="row">
        <div class="col-lg-6">
            <h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="col-lg-6" style="float: right; text-align: right">
            <?= Html::a(' ', ['create'], ['class' => 'glyphicon glyphicon-plus-sign btn btn-primary']) ?>
        </div>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'id_xa',
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
                'attribute' => 'vitri',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            //Lấy tên huyện mà xã này trực thuộc
            [
                'attribute' => 'id_huyen',
                'value' => 'huyen.ten',
                'label' => 'Thuộc Huyện',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
                //'filter' => Html::activeDropDownList($searchModel, 'id_huyen', ArrayHelper::map(VnHuyen::find()->all(), 'id_huyen', 'ten'),['class'=>'form-control','prompt' => '- Chọn -']),
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width:260px; text-align:center'],
                'headerOptions' => ['style' => 'text-align:center'],
                'header' => 'Thao tác',
                'template' => '{view} ',
            ],
        ],
        'pager' => [
            'firstPageLabel' => 'Trang đầu',
            'lastPageLabel' => 'Trang cuối',
            'maxButtonCount' => 5,
        ],
    ]);
    ?>
</div>
