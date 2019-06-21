<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sanpham */

$this->title = $model->ma_sanpham. ': '.$model->ten;
$this->params['breadcrumbs'][] = ['label' => 'Sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$this->registerCss('table.detail-view th {width: 25%;} table.detail-view td { width: 75%;}')

?>
<div class="sanpham-view" style="margin-top: 30px">
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-lg-9">
            <h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="col-lg-3" style="float: right; text-align: right">
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
            'ma_sanpham',
            'ten',
            'ten_url',
            [
                'label' => 'Danh mục',
                'attribute' => 'id_danhmuc',
                'value' => function ($model) {
                    if($model->id_danhmuc != null){
                        return $model->danhmucsanpham->ten;
                    }else{
                        return '';
                    }
                },
            ],
            [
                'label' => 'Thương hiệu',
                'attribute' => 'id_thuonghieu',
                'value' => function ($model) {
                    if($model->id_thuonghieu != null){
                        return $model->thuonghieusanpham->ten;
                    }else{
                        return '';
                    }
                },
            ],
            [
                'attribute' => 'hinhanh',
                'label' => 'Hình ảnh',
                'value' => function($model) {
                    if ($model->hinhanh != "") {
                        return Yii::$app->homeUrl . '/uploads/images/sanpham/' . $model->hinhanh;
                    } else {
                        return Yii::$app->homeUrl . '/uploads/images/sanpham/no-logo.png';
                    }
                },
                'format' => ['image', ['width' => '200px']],
            ],
            [
                'attribute' => 'mota_ngan',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->mota_ngan;
                },
            ],
            [
                'attribute' => 'mota',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->mota;
                },
            ],
            'baohanh',
            'soluong',
            [
                'attribute' => 'giaban',
                'label' => 'Giá khuyến mại',
                'value' => function($model) {
                    return number_format($model->giaban) . ' (VNĐ)';
                },
            ],
            [
                'attribute' => 'giakhuyenmai',
                'label' => 'Giá khuyến mại',
                'value' => function ($model) {
                    return number_format($model->giakhuyenmai) . ' (VNĐ)';
                },
            ],
            'khuyenmai',
            [
                'attribute' => 'sp_banchay',
                'label' => 'Sản phẩm bán chạy',
                'format' => 'raw',
                'value' => function($model) {
                    if ($model->sp_banchay == 1) {
                        return Html::img('@web/toandq/images/icon-ok.png', ['alt'=>'Đã kích hoạt', 'title'=>'Đã kích hoạt', 'width'=>'20px']);
                    } else {
                        return Html::img('@web/toandq/images/icon-danger.png', ['alt'=>'Đã hủy kích hoạt', 'title'=>'Đã hủy kích hoạt', 'width'=>'20px']);
                    }
                },
            ],
            [
                'attribute' => 'sp_noibat',
                'label' => 'Sản phẩm nổi bật',
                'format' => 'raw',
                'value' => function($model) {
                    if ($model->sp_noibat == 1) {
                        return Html::img('@web/toandq/images/icon-ok.png', ['alt'=>'Đã kích hoạt', 'title'=>'Đã kích hoạt', 'width'=>'20px']);
                    } else {
                        return Html::img('@web/toandq/images/icon-danger.png', ['alt'=>'Đã hủy kích hoạt', 'title'=>'Đã hủy kích hoạt', 'width'=>'20px']);
                    }
                },
            ],
            [
                'attribute' => 'sp_moinhap',
                'label' => 'Sản phẩm mới nhập',
                'format' => 'raw',
                'value' => function($model) {
                    if ($model->sp_moinhap == 1) {
                        return Html::img('@web/toandq/images/icon-ok.png', ['alt'=>'Đã kích hoạt', 'title'=>'Đã kích hoạt', 'width'=>'20px']);
                    } else {
                        return Html::img('@web/toandq/images/icon-danger.png', ['alt'=>'Đã hủy kích hoạt', 'title'=>'Đã hủy kích hoạt', 'width'=>'20px']);
                    }
                },
            ],
            'meta_mota:ntext',
            'meta_tukhoa:ntext',
            'link_video',
            'video_width',
            'video_height',
            [
                'attribute' => 'file_huongdan',
                'label' => 'File hướng dẫn',
                'value' => function($model) {
                    if ($model->file_huongdan != "") {
                        return Html::a('Xem', Yii::$app->homeUrl . 'uploads/sanpham-huongdan/' . $model->file_huongdan);
                    }
                },
                'format' => ['raw'],
            ],
            'pk_dikem',
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
        ],
    ]) ?>

</div>
