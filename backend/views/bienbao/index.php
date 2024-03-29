<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BienbaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Biển báo';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCss("#w0-cols{display: block; background: #3c8dbc; border-color: #4aa3d6; color: #fff} #w2{background: #3c8dbc; border-color: #4aa3d6; color: #fff}");
$this->registerJs("$('#w0-cols').on('click', function() { $('.kv-checkbox-list').toggle(); });");
?>
<div class="bienbao-index" style="margin-top: 30px;">
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-lg-6">
            <h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="col-lg-6" style="float: right; text-align: right; padding-right: 50px;">
            <?php
            $gridColumns = [
                ['class' => 'kartik\grid\SerialColumn'],
                [
                    'attribute' => 'id_tuyenduong',
                    'headerOptions' => ['style' => 'text-align:center;'],
                    'contentOptions' => ['style' => 'text-align:center;'],
                ],
                [
                    'attribute' => 'id_donvikhaithac',
                    'headerOptions' => ['style' => 'text-align:center;'],
                    'contentOptions' => ['style' => 'text-align:center;'],
                ],
                [
                    'attribute' => 'kmchinh',
                    'label' => 'Lý trình',
                    'value' => function($model) {
                        if($model->kmchinh_nhanh != '' || $model->kmle_nhanh != ''){
                            return 'Km' . $model->kmchinh_nhanh . '+' . $model->kmle_nhanh .' (N)';
                        }else{
                            return 'Km' . $model->kmchinh . '+' . $model->kmle;
                        }
                    },
                    'headerOptions' => ['style' => 'text-align:center;'],
                    'contentOptions' => ['style' => 'text-align:center;']
                ],
                [
                    'attribute' => 'chieucaotinhkhong',
                    'headerOptions' => ['style' => 'text-align:center;'],
                    'contentOptions' => ['style' => 'text-align:center;'],
                    'value' => function($model) {
                        return number_format($model->chieucaotinhkhong, 2, ',', '') . ' (m)';
                    },
                ],
                [
                    'attribute' => 'soluongbientrencot',
                    'headerOptions' => ['style' => 'text-align:center;'],
                    'contentOptions' => ['style' => 'text-align:center;'],
                ],
                [
                    'attribute' => 'namxaydung',
                    'headerOptions' => ['style' => 'text-align:center;'],
                    'contentOptions' => ['style' => 'text-align:center;'],
                ],
                [
                    'attribute' => 'bienbao_sohieu',
                    'headerOptions' => ['style' => 'text-align:center;'],
                    'contentOptions' => ['style' => 'text-align:center;'],
                ],
                [
                    'attribute' => 'bienbao_tenbien',
                    'headerOptions' => ['style' => 'text-align:center;'],
                    'contentOptions' => ['style' => 'text-align:left;'],
                    'format' => 'html',
                    'value' => function ($model) {
                        return Yii::$app->toandq->_substr($model->bienbao_tenbien, 30);
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
            <?= Html::a(' ', ['create'], ['class' => 'glyphicon glyphicon-plus-sign btn btn-primary', 'title' => 'Thêm mới']) ?>
        </div>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'id_tuyenduong',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'id_donvikhaithac',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'kmchinh',
                'label' => 'Lý trình',
                'value' => function($model) {
                    if($model->kmchinh_nhanh != '' || $model->kmle_nhanh != ''){
                        return 'Km' . $model->kmchinh_nhanh . '+' . $model->kmle_nhanh .' (N)';
                    }else{
                        return 'Km' . $model->kmchinh . '+' . $model->kmle;
                    }
                },
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;']
            ],
            [
                'attribute' => 'chieucaotinhkhong',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
                'value' => function($model) {
                    return number_format($model->chieucaotinhkhong, 2, ',', '') . ' (m)';
                },
            ],
            [
                'attribute' => 'soluongbientrencot',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'namxaydung',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'bienbao_sohieu',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'bienbao_tenbien',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:left;'],
                'format' => 'html',
                'value' => function ($model) {
                    return Yii::$app->toandq->_substr($model->bienbao_tenbien, 30);
                },
            ],
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
            'maxButtonCount' => 5,
        ],
    ]);
    ?>
</div>
