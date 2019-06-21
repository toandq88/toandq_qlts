<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TuyenduongSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tuyến đường';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuyenduong-index"style="margin-top: 30px;">
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-lg-6">
            <h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="col-lg-6" style="float: right; text-align: right">
            <?= Html::a(' ', ['create'], ['class' => 'glyphicon glyphicon-plus-sign btn btn-primary']) ?>
        </div>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'matuyenduong',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'tenduong',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:left;'],
            ],
            //'tentuyen',
            //'nhanhdanso',
            [
                'attribute' => 'capduong',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:left;'],
            ],
            [
                'attribute' => 'donviquanly',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:left;'],
            ],
            //'coquanquanly',
            //'tukmchinh',
            //'tukmle',
            //'denkmchinh',
            //'denkmle',
            //'vidodau',
            //'kinhdodau',
            //'vidocuoi',
            //'kinhdocuoi',
            //'loailanduong',
            //'tinh',
            //'huyen',
            //'dieuchinhcotkm',
            //'chieudaitheocotkm',
            [
                'attribute' => 'chieudaithucte',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:right;'],
            ],
            //'namhoanthanhxaydung',
            //'nambatdaukhaithac',
            //'hanhlangduongbo',
            //'loaicongtrinhduongbo',
            //'solanxecogioi',
            //'chieuronglanxecogioi',
            //'loaimatduonglanxecogioi',
            //'loaimatduonglanxethoso',
            //'chieurongphanduongxechay',
            //'chieurongmatduong',
            //'leduong',
            //'chieuronglegiaco',
            //'loaiketcaulegiaco',
            //'chieuronglekhonggiaco',
            //'viahe',
            //'chieurongviahe',
            //'loaiviahe',
            //'chieurongthoatnuoc',
            [
                'attribute' => 'tocdothietke',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:right;'],
            ],
            //'tocdotoidacaclan',
            //'tocdotoithieucaclan',
            //'loaidiahinh',
            //'nhietdo',
            //'luongmuatrungbinh',
            //'loainenduong',
            //'anh_daidien',
            //'nguoitao',
            //'ngaytao',
            //'nguoisua',
            //'ngaysua',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
