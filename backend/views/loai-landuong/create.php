<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LoaiLanduong */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Loại làn đường', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loai-landuong-create">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
