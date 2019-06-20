<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\SanphamDanhmuc;
use app\models\SanphamThuonghieu;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SanphamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanpham-index" style="margin-top: 30px;">
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

            //'id',
            [
                'attribute' => 'ma_sanpham',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;']
            ],
            [
                'attribute' => 'ten',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:left;']
            ],
            //'ten_url:url',
            [
                'attribute' => 'id_danhmuc',
                'value' => 'danhmucsanpham.ten',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
                'filter' => Html::activeDropDownList($searchModel, 'id_danhmuc', SanphamDanhmuc::getDacap(), ['prompt' => ' -- Chọn --', 'class' => 'form-control']),
            ],
            [
                'attribute' => 'id_thuonghieu',
                'value' => 'thuonghieusanpham.ten',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
                'filter' => Html::activeDropDownList($searchModel, 'id_thuonghieu', ArrayHelper::map(SanphamThuonghieu::find()->all(), 'id', 'ten'),['class'=>'form-control','prompt' => '- Chọn -']),
            ],
            [
                'attribute' => 'hinhanh',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
                'format' => 'html',
                'value' => function ($model) {
                    if ($model->hinhanh != '') {
                        return Html::img(Yii::$app->homeUrl . '/uploads/images/sanpham/' . $model['hinhanh'], ['width' => '40px', 'height: 20px']);
                    } else {
                        return Html::img(Yii::$app->homeUrl . '/uploads/images/sanpham/no-logo.png', ['width' => '40px', 'height: 20px']);
                    }
                },
            ],
            //'mota_ngan:ntext',
            //'mota:ntext',
            //'baohanh',
            //'soluong',
            [
                'attribute' => 'giaban',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:right;'],
                'value' => function($model) {
                    return number_format($model->giaban);
                },
            ],
            [
                'attribute' => 'giakhuyenmai',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:right;'],
                'value' => function($model) {
                    return number_format($model->giakhuyenmai);
                },
            ],
            //'khuyenmai',
            //'sp_banchay',
            //'sp_noibat',
            //'sp_moinhap',
            //'meta_mota:ntext',
            //'meta_tukhoa:ntext',
            //'link_video',
            //'video_width',
            //'video_height',
            //'file_huongdan',
            //'pk_dikem',
            //'thutu',
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
            //'nguoitao',
            //'nguoisua',
            //'ngaytao',
            //'ngaysua',

            [
                'class' => 'yii\grid\ActionColumn',
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
    ]); ?>
</div>
