<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cauhinh */

$this->title = 'Create Cauhinh';
$this->params['breadcrumbs'][] = ['label' => 'Cauhinhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cauhinh-create">
    <h3><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
