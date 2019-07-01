<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TuyenduongSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tuyến đường';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCss("#w0-cols{display: block; background: #3c8dbc; border-color: #4aa3d6; color: #fff} #w2{background: #3c8dbc; border-color: #4aa3d6; color: #fff}");
$this->registerJs("$('#w0-cols').on('click', function() { $('.kv-checkbox-list').toggle(); });");
?>
<div class="tuyenduong-index" style="margin-top: 30px;">
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-lg-6">
            <h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="col-lg-6" style="float: right; text-align: right; padding-right: 50px;">
            <?php
            $gridColumns = [
                ['class' => 'kartik\grid\SerialColumn'],
                'matuyenduong',
                'tenduong',
                'tentuyen',
                'nhanhdanso',
                'capduong',
                [
                    'attribute' => 'donviquanly',
                    'value' => 'donvi.tenviettat',
                ],
                'coquanquanly',
                //'tukmchinh',
                //'tukmle',
                //'denkmchinh',
                //'denkmle',
                //'vidodau',
                //'kinhdodau',
                //'vidocuoi',
                //'kinhdocuoi',
                'loailanduong',
                //'tinh',
                //'huyen',
                'dieuchinhcotkm',
                [
                    'attribute' => 'chieudaitheocotkm',
                    'value' => function($model) {
                        return $model->chieudaitheocotkm . ' (km)';
                    },
                ],
                [
                    'attribute' => 'chieudaithucte',
                    'value' => function($model) {
                        return $model->chieudaithucte . ' (km)';
                    },
                ],
                'namhoanthanhxaydung',
                'nambatdaukhaithac',
                'hanhlangduongbo',
                'loaicongtrinhduongbo',
                'solanxecogioi',
                [
                    'attribute' => 'chieuronglanxecogioi',
                    'value' => function($model) {
                        return $model->chieuronglanxecogioi . ' (m)';
                    },
                ],
                'loaimatduonglanxecogioi',
                'loaimatduonglanxethoso',
                [
                    'attribute' => 'chieurongphanduongxechay',
                    'value' => function($model) {
                        return $model->chieurongphanduongxechay . ' (m)';
                    },
                ],
                [
                    'attribute' => 'chieurongmatduong',
                    'value' => function($model) {
                        return $model->chieurongmatduong . ' (m)';
                    },
                ],
                'leduong',
                [
                    'attribute' => 'chieuronglegiaco',
                    'value' => function($model) {
                        return $model->chieuronglegiaco . ' (m)';
                    },
                ],
                'loaiketcaulegiaco',
                [
                    'attribute' => 'chieuronglekhonggiaco',
                    'value' => function($model) {
                        return $model->chieuronglekhonggiaco . ' (m)';
                    },
                ],
                'viahe',
                [
                    'attribute' => 'chieurongviahe',
                    'value' => function($model) {
                        return $model->chieurongviahe . ' (m)';
                    },
                ],
                'loaiviahe',
                [
                    'attribute' => 'chieurongthoatnuoc',
                    'value' => function($model) {
                        return $model->chieurongthoatnuoc . ' (m)';
                    },
                ],
                [
                    'attribute' => 'tocdothietke',
                    'value' => function($model) {
                        return $model->tocdothietke . ' (km/h)';
                    },
                ],
                ['class' => 'kartik\grid\ActionColumn', 'urlCreator' => function() {
                        return '#';
                    }
                ]
            ];

            echo ExportMenu::widget([
                'dataProvider' => $dataProvider,
                'columns' => $gridColumns,
                'options' => [ 'style' => 'table-layout:fixed;'],
                'exportConfig' => [
                    //ExportMenu::FORMAT_TEXT => false,
                    //ExportMenu::FORMAT_HTML => false,
                    //ExportMenu::FORMAT_EXCEL => false,
                    ExportMenu::FORMAT_PDF => false,
                /* ExportMenu::FORMAT_PDF => [
                  'pdfConfig' => [
                  'methods' => [
                  'SetTitle' => 'Báo cáo Thông tin kiểm tra cầu',
                  'SetSubject' => 'Xuất file pdf',
                  'SetHeader' => ['Xuất bản||Ngày xuất bản: ' . date("r")],
                  'SetFooter' => ['|Trang {PAGENO}|'],
                  'SetAuthor' => 'toandq',
                  'SetCreator' => 'toandq',
                  'SetKeywords' => 'Yii2, Export, PDF, MPDF, Output, GridView, Grid, yii2-grid, yii2-mpdf, yii2-export',
                  ]
                  ]
                  ], */
                ],
            ]);
            ?>
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
