<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HonorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Honors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="honor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Honor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'staff_id',
            'time',
            'name',
            'rank',
            'describe',
            'other',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
