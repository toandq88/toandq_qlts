<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BienbaoLoai */

$this->title = $model->ten;
$this->params['breadcrumbs'][] = ['label' => 'Loại thông tin biển báo', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ten, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bienbao-loai-update">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
