<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DatasetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datasets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dataset-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dataset', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'contributor',
            'dataset_name',
            'size',
            'url:url',
            //'describe',
            //'other',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
