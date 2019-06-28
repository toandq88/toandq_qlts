<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bienbao */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Biển báo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bienbao-create">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
