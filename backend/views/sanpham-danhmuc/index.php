<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SanphamDanhmucSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sanpham Danhmucs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanpham-danhmuc-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sanpham Danhmuc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ten',
            'ten_url:url',
            'hinhanh',
            'parents',
            //'mota:ntext',
            //'meta_mota:ntext',
            //'meta_tukhoa:ntext',
            //'thutu',
            //'tinhtrang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
