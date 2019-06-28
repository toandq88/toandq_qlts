<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BienbaoLoai */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Loại thông tin Biển báo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bienbao-loai-create">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
