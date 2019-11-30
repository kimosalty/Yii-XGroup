<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GroupIndex */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lab-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'imgs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'highlights')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'events')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
