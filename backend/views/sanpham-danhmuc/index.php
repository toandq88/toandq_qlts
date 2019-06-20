<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\SanphamDanhmuc;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SanphamDanhmucSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh mục sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanpham-danhmuc-index" style="margin-top: 30px;">
    <div class="row" style="margin-bottom: 10px;">
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
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'ten',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:left;']
            ],
            [
                'attribute' => 'ten_url',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:left;']
            ],
            [
                'attribute' => 'hinhanh',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
                'format' => 'html',
                'value' => function ($model) {
                    if ($model->hinhanh != '') {
                        return Html::img(Yii::$app->homeUrl . '/uploads/images/sanpham-danhmuc/' . $model['hinhanh'], ['width' => '40px', 'height: 20px']);
                    } else {
                        return Html::img(Yii::$app->homeUrl . '/uploads/images/sanpham-danhmuc/no-logo.png', ['width' => '40px', 'height: 20px']);
                    }
                },
            ],
            [
                'attribute' => 'parents',
                'value' => 'sanphamdanhmuc.ten',
                'headerOptions' => ['style' => 'text-align:center; width: 15%;'],
                'contentOptions' => ['style' => 'text-align:left;'],
                'filter' => Html::activeDropDownList($searchModel, 'parents', ArrayHelper::map(SanphamDanhmuc::find()->where(['parents' => null])->all(), 'id', 'ten'),['class'=>'form-control','prompt' => '- Chọn -']),
            ],
            [
                'attribute' => 'tinhtrang',
                'label' => 'Trạng thái',
                'format' => 'raw',
                'filter'    => ["" => "Tất cả", "1" => "Kích hoạt", "0"=>"Hủy kích hoạt"],
                'value' => function($model) {
                    if ($model->tinhtrang == 1) {
                        return Html::img('@web/toandq/images/icon-ok.png', ['alt' => 'Đã kích hoạt', 'title' => 'Đã kích hoạt', 'width' => '20px']);
                    } else {
                        return Html::img('@web/toandq/images/icon-danger.png', ['alt' => 'Đã hủy kích hoạt', 'title' => 'Đã hủy kích hoạt', 'width' => '20px']);
                    }
                },
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            //'mota:ntext',
            //'meta_mota:ntext',
            //'meta_tukhoa:ntext',
            //'thutu',
            [
                'class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'text-align:center'],
                'headerOptions' => ['style' => 'text-align:center'],
                //'header' => 'Thao tác',
                'template' => '{view} {update} {delete}',
            ],
        ],
        'pager' => [
            'firstPageLabel' => 'Trang đầu',
            'lastPageLabel' => 'Trang cuối',
            'maxButtonCount' => 5,
            //'prevPageLabel' => '<span class="glyphicon glyphicon-chevron-left"></span>',
            //'nextPageLabel' => '<span class="glyphicon glyphicon-chevron-right"></span>',
        ],
    ]);
    ?>
</div>
