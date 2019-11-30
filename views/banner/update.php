<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BannerForm */
/* @var $upload_model app\models\BannerUploadForm */


$this->title = 'Update Banner Form: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Banner Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="banner-form-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'upload_model' => $upload_model
    ]) ?>

</div>
