<?php

namespace app\controllers;

use app\models\Dataset;
use app\models\Meeting;

class ResourcesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $sql = 'select * from dataset';
        $dataset = Dataset::findBySql($sql)->all();
        return $this->render('index', [
            'datasets' => $dataset
        ]);
    }

    public function actionDataset(){
        $sql = 'select * from dataset';
        $dataset = Dataset::findBySql($sql)->all();

        return $this->render('dataset',[
            'datasets' => $dataset
        ]);
    }

    public function actionMeeting(){
        $sql = 'select * from meeting';
        $meeting = Meeting::findBySql($sql)->all();

        return $this->render('meeting', [
            'meetings' => $meeting
        ]);
    }
}
