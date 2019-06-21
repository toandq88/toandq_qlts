<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tuyenduong */

$this->title = $model->tenduong;
$this->params['breadcrumbs'][] = ['label' => 'Tuyến đường', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tuyenduong-view" style="margin-top: 30px">
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
            'matuyenduong',
            'tenduong',
            'tentuyen',
            'nhanhdanso',
            'capduong',
            'donviquanly',
            'coquanquanly',
            'tukmchinh',
            'tukmle',
            'denkmchinh',
            'denkmle',
            'vidodau',
            'kinhdodau',
            'vidocuoi',
            'kinhdocuoi',
            'loailanduong',
            'tinh',
            'huyen',
            'dieuchinhcotkm',
            'chieudaitheocotkm',
            'chieudaithucte',
            'namhoanthanhxaydung',
            'nambatdaukhaithac',
            'hanhlangduongbo',
            'loaicongtrinhduongbo',
            'solanxecogioi',
            'chieuronglanxecogioi',
            'loaimatduonglanxecogioi',
            'loaimatduonglanxethoso',
            'chieurongphanduongxechay',
            'chieurongmatduong',
            'leduong',
            'chieuronglegiaco',
            'loaiketcaulegiaco',
            'chieuronglekhonggiaco',
            'viahe',
            'chieurongviahe',
            'loaiviahe',
            'chieurongthoatnuoc',
            'tocdothietke',
            'tocdotoidacaclan',
            'tocdotoithieucaclan',
            'loaidiahinh',
            'nhietdo',
            'luongmuatrungbinh',
            'loainenduong',
            'anh_daidien',
            'nguoitao',
            'ngaytao',
            'nguoisua',
            'ngaysua',
        ],
    ]) ?>

</div>
