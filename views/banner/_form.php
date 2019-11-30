<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $upload_model app\models\BannerUploadForm */
/* @var $model app\models\BannerForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banner-form-form">


    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($upload_model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'redirect_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'des')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
