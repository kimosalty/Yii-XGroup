<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Honor */

$this->title = 'Update Honor: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Honors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="honor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
