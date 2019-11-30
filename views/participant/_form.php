<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Participant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="participant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nameone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nametwo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namethree')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namefour')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namefive')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namesix')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameseven')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameeight')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
