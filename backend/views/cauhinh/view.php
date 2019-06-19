<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cauhinh */

$this->title = $model->tieude;
$this->params['breadcrumbs'][] = ['label' => 'Cấu hình', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cauhinh-view" style="margin-top: 30px;">
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-lg-6">
            <h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="col-lg-6" style="float: right; text-align: right">
            <?= Html::a(' ', ['update', 'id' => $model->id], ['class' => 'glyphicon glyphicon-pencil btn btn-primary']) ?>
        </div>
    </div>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tieude',
            'slogan',
            [
                'attribute' => 'footer',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->footer;
                },
            ],
            [
                'attribute' => 'gioithieu',
                'format' => 'html',
                'value' => function ($model) {
                    return $model->gioithieu;
                },
            ],
            'mota:ntext',
            'tukhoa:ntext',
            'bando:ntext',
            'hotline1',
            'hotline2',
            [
                'attribute' => 'facebook',
                'label' => 'Facebook',
                'value' => function($model) {
                    if ($model->facebook != "") {
                        return Html::a($model->facebook, $model->facebook);
                    }
                },
                'format' => ['raw'],
            ],
            [
                'attribute' => 'youtube',
                'label' => 'Youtube',
                'value' => function($model) {
                    if ($model->youtube != "") {
                        return Html::a($model->youtube, $model->youtube);
                    }
                },
                'format' => ['raw'],
            ],
            [
                'attribute' => 'google',
                'label' => 'Google',
                'value' => function($model) {
                    if ($model->google != "") {
                        return Html::a($model->google, $model->google);
                    }
                },
                'format' => ['raw'],
            ],
            'sp_moi',
            'sp_dacbiet',
            'sp_banchay',
            'sp_danhmuc',
            'sp_cungloai',
            'tintuc_1trang',
            'tintuc_khac',
            [
                'attribute' => 'qc_2ben',
                'label' => 'Có quảng cáo 2 bên',
                'value' => function($model) {
                    if ($model->qc_2ben == 0) {
                        return 'Không';
                    } else {
                        return 'Có';
                    }
                }
            ],
            [
                'attribute' => 'qc_goc_phai',
                'label' => 'Có quảng cáo góc phải',
                'value' => function($model) {
                    if ($model->qc_goc_phai == 0) {
                        return 'Không';
                    } else {
                        return 'Có';
                    }
                }
            ],
            [
                'attribute' => 'back_top',
                'label' => 'Có Back Top',
                'value' => function($model) {
                    if ($model->back_top == 0) {
                        return 'Không';
                    } else {
                        return 'Có';
                    }
                }
            ],
        ],
    ]) ?>

</div>
