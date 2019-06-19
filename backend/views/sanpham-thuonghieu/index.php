<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SanphamThuonghieuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Thương hiệu sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanpham-thuonghieu-index" style="margin-top: 30px;">
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-lg-6">
            <h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="col-lg-6" style="float: right; text-align: right">
            <?= Html::a(' ', ['create'], ['class' => 'glyphicon glyphicon-plus-sign btn btn-primary']) ?>
        </div>
    </div>

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

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
                'attribute' => 'logo',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
                'format' => 'html',
                'value' => function ($model) {
            if ($model->logo != '') {
                return Html::img(Yii::$app->homeUrl . '/uploads/images/thuonghieu/' . $model['logo'], ['width' => '40px', 'height: 20px']);
            } else {
                return Html::img(Yii::$app->homeUrl . '/uploads/images/thuonghieu/no-logo.png', ['width' => '40px', 'height: 20px']);
            }
        },
            ],
            [
                'attribute' => 'website',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:left;'],
                'format' => 'url',
            ],
            [
                'attribute' => 'thutu',
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
            [
                'attribute' => 'tinhtrang',
                'label' => 'Kích hoạt',
                'format' => 'raw',
                'value' => function($model) {
                    if ($model->tinhtrang == 1) {
                        return Html::img('@web/toandq/images/icon-ok.png', ['alt' => 'Đã kích hoạt', 'title' => 'Đã kích hoạt', 'width' => '20px']);
                    } else {
                        return Html::img('@web/toandq/images/icon-danger.png', ['alt' => 'Đã hủy kích hoạt', 'title' => 'Đã hủy kích hoạt', 'width' => '20px']);
                    }
                },
                        'headerOptions' => ['style' => 'text-align:center;'],
                        'contentOptions' => ['style' => 'text-align:center;'],
                        'filterInputOptions' => [
                            'class' => 'form-control',
                            'placeholder' => '0 / 1'
                        ],
                    ],
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
</div>
