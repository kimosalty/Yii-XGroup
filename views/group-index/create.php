<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GroupIndex */

$this->title = 'Create GroupIndex';
$this->params['breadcrumbs'][] = ['label' => 'Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
