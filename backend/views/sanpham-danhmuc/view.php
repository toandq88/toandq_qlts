<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SanphamDanhmuc */

$this->title = $model->ten;
$this->params['breadcrumbs'][] = ['label' => 'Danh mục sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$this->registerCss('table.detail-view th {width: 25%;} table.detail-view td { width: 75%;}')
?>
<div class="sanpham-danhmuc-view" style="margin-top: 30px">
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-lg-6">
            <h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="col-lg-6" style="float: right; text-align: right">
            <?= Html::a(' ', ['update', 'id' => $model->id], ['class' => 'glyphicon glyphicon-pencil btn btn-primary']) ?>
            <?= Html::a(' ', ['delete', 'id' => $model->id], [
            'class' => 'glyphicon glyphicon-trash btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có chắc chắn muốn xóa thông tin này không?',
                'method' => 'post',
            ],
        ]) ?>
        </div>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'ten',
            'ten_url',
            [
                'label' => 'Thuộc danh mục',
                'attribute' => 'parents',
                'value' => function ($model) {
                    if($model->parents != null){
                        return $model->sanphamdanhmuc->ten;
                    }else{
                        return '';
                    }
                },
            ],
            [
                'attribute' => 'mota',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->mota;
                },
            ],
            'meta_mota:ntext',
            'meta_tukhoa:ntext',
            'thutu',
            [
                'attribute' => 'tinhtrang',
                'label' => 'Kích hoạt',
                'format' => 'raw',
                'value' => function($model) {
                    if ($model->tinhtrang == 1) {
                        return Html::img('@web/toandq/images/icon-ok.png', ['alt'=>'Đã kích hoạt', 'title'=>'Đã kích hoạt', 'width'=>'20px']);
                    } else {
                        return Html::img('@web/toandq/images/icon-danger.png', ['alt'=>'Đã hủy kích hoạt', 'title'=>'Đã hủy kích hoạt', 'width'=>'20px']);
                    }
                },
            ],
            'nguoitao',
            'nguoisua',
            'ngaytao',
            'ngaysua',
            [
                'attribute' => 'hinhanh',
                'label' => 'Hình ảnh',
                'value' => function($model) {
                    if ($model->hinhanh != "") {
                        return Yii::$app->homeUrl . '/uploads/images/sanpham-danhmuc/' . $model->hinhanh;
                    } else {
                        return Yii::$app->homeUrl . '/uploads/images/sanpham-danhmuc/no-logo.png';
                    }
                },
                'format' => ['image', ['width' => '200px']],
            ],
        ],
    ]) ?>

</div>
