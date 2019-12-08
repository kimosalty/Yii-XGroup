<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dataset */

$this->title = 'Create Dataset';
$this->params['breadcrumbs'][] = ['label' => 'Datasets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dataset-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
