<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ParticipantSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="participant-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nameone') ?>

    <?= $form->field($model, 'nametwo') ?>

    <?= $form->field($model, 'namethree') ?>

    <?= $form->field($model, 'namefour') ?>

    <?php // echo $form->field($model, 'namefive') ?>

    <?php // echo $form->field($model, 'namesix') ?>

    <?php // echo $form->field($model, 'nameseven') ?>

    <?php // echo $form->field($model, 'nameeight') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
