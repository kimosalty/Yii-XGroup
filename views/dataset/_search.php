<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DatasetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dataset-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'contributor') ?>

    <?= $form->field($model, 'dataset_name') ?>

    <?= $form->field($model, 'size') ?>

    <?= $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'describe') ?>

    <?php // echo $form->field($model, 'other') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
