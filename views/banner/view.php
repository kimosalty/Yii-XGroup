<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BannerForm */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Banner Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="banner-form-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'img_url',
                'format' => 'url',
                'value' => function ($data) {
                    return Yii::$app->request->hostInfo . '/' . $data->img_url;
                },
            ],
//            'img_url:url',
            'redirect_url:url',
            'des',
        ],
    ]) ?>

</div>
