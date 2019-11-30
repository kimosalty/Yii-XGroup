<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\commands\Utils;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'name',
                'format' => 'ntext',
                'value' => function ($data) {
                    return Utils::fix_str_length($data->name, 30);
                },
            ],
            'date',
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'content',
                'format' => 'ntext',
                'value' => function ($data) {
                    return Utils::fix_str_length($data->content, 30);
                },
            ],
//            'image:url',
//            'href:url',
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'image',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::a(Utils::fix_str_length($data->image, 30, '...'), $data->image);
                },
            ],
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'href',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::a(Utils::fix_str_length($data->href, 30, '...'), $data->href);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
