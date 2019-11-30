<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Honor */

$this->title = 'Create Honor';
$this->params['breadcrumbs'][] = ['label' => 'Honors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="honor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
