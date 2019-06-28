<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bienbao */

$this->title = 'Số hiệu '. $model->bienbao_sohieu.': '.$model->bienbao_tenbien;
$this->params['breadcrumbs'][] = ['label' => 'Biển báo', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bienbao_sohieu, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="bienbao-update">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
