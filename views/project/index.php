<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\commands\Utils;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'objective',
                'format' => 'ntext',
                'value' => function ($data) {
                    return Utils::fix_str_length($data->objective, 30);
                },
            ],[
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'introduction',
                'format' => 'ntext',
                'value' => function ($data) {
                    return Utils::fix_str_length($data->introduction, 30);
                },
            ],
//            'introduction:ntext',
            'participants',
            'cooperator',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
