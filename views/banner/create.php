<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BannerForm */
/* @var $upload_model app\models\BannerUploadForm */

$this->title = 'Create Banner Form';
$this->params['breadcrumbs'][] = ['label' => 'Banner Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'upload_model' => $upload_model
    ]) ?>

</div>
