<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StaffProject */

$this->title = 'Create StaffProject';
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
