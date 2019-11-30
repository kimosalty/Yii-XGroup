<?php

namespace app\controllers;

use app\models\Honor;
use app\models\Paper;
use app\models\StaffProject;
use Yii;
use yii\db\Query;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Staff;

class HomeController extends Controller
{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
//        $query = Staff::findOne(1);
//        $staffs = $query;
        $sql = 'select * from staff where id=1';
        $staffs = Staff::findBySql($sql)->all();

        $sql = "select * from honor, staff where staff.id = honor.staff_id";
        $honors = Honor::findBySql($sql)->all();

        $sql = "select * from staff_project, staff where staff.id = staff_project.staff_id";
        $projects = StaffProject::findBySql($sql)->all();

        $sql = "select * from paper, staff where staff.id = paper.staff_id";
        $papers = Paper::findBySql($sql)->all();
        return $this->renderAjax('index', [
            'staffs' => $staffs,
            'honors' => $honors,
            'projects' => $projects,
            'papers' => $papers,
        ]);
    }
}