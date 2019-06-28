<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TuyenduongSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tuyến đường';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuyenduong-index" style="margin-top: 30px;">
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
            //Đơn vị quản lý
            [
                'attribute' => 'donviquanly',
                'value' => 'donvi.tenviettat',
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
                'label' => 'Chiều dài thực tế',
                'value' => function($model) {
                    return $model->chieudaithucte . ' km';
                },
                        'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'namhoanthanhxaydung',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'solanxecogioi',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'tocdothietke',
                'value' => function($model) {
                    return $model->tocdothietke . ' (km/h)';
                },
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            //'namhoanthanhxaydung',
            //'nambatdaukhaithac',
            //'hanhlangduongbo',
            //'loaicongtrinhduongbo',
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

            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'text-align:center'],
                'headerOptions' => ['style' => 'text-align:center'],
                //'header' => 'Thao tác',
                'template' => '{view} {update} {delete} ',
            ],
        ],
        'pager' => [
            'firstPageLabel' => 'Trang đầu',
            'lastPageLabel' => 'Trang cuối',
        ],
    ]); ?>
</div>
