<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BannerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Banner Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-form-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Banner Form', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'img_url',
                'format' => 'url',
                'value' => function ($data) {
                    return Yii::$app->request->hostInfo . '/' . $data->img_url;
                },
            ],
            'redirect_url:url',
            'des',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
