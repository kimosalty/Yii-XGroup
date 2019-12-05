<?php

namespace app\controllers;

use app\models\BannerForm;
use app\models\News;
use app\models\Publication;
use app\models\Project;
use app\models\Author;
use app\models\EntryForm;
use app\models\GroupIndex;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\commands\Utils;

class SiteController extends Controller
{

    public function actionEntry()
    {
        $model = new EntryForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            return $this->render('entry', ['model' => $model]);
        }
    }

    public function actionSay($message = 'Hello')
    {

        return $this->render('say', ['message' => $message]);
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $labModel = GroupIndex::find()->all();
//        array_map('intval', explode(',', $labModel[0]->imgs));
        $imgs = explode(",", $labModel[0]->imgs);
        $bannerModel = BannerForm::find()->where(['in', 'id', $imgs])->all();
        $banners = array_map(function ($data) {
            return [
                'content' => '<div class="img" style="background: url(\'' . $data->img_url . '\');" ></div>',
                'caption' => "<div class='banner-des pull-left'><h1>X-Group of TJU </h1><div class='content'>Something to write on.</div></div>",
                'options' => ['onclick' => "window.open('" . Utils::fix_url($data->redirect_url) . "','_self')",
                    'style' => 'cursor: pointer;',
                    'class' => 'item'],       //配置对应的样式
            ];
        }, $bannerModel);

//        $news = explode(",", $labModel[0]->news);
//        $newsModel = News::find()->where(['in', 'id', $news])->all();
        $newsModel = News::find()->orderBy('date DESC')->limit(5)->all();

//        $publications = explode(",", $labModel[0]->publications);
//        $publicationModel = Publication::find()->where(['in', 'publication.id', $publications])->joinWith(['author'])->asArray()->all();
        $publicationModel = Publication::find()->orderBy('time DESC')->limit(5)->joinWith(['author'])->asArray()->all();


        $projects = explode(",", $labModel[0]->highlights);
        $projectModel = Project::find()->where(['in', 'id', $projects])->all();


        return $this->render('index', ['banners' => $banners,
            'news' => $newsModel, 'publications' => $publicationModel,
            'projects' => $projectModel]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
//
//    /**
//     * Displays contact page.
//     *
//     * @return Response|string
//     */
//    public function actionContact()
//    {
//        $model = new ContactForm();
//        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
//            Yii::$app->session->setFlash('contactFormSubmitted');
//
//            return $this->refresh();
//        }
//        return $this->render('contact', [
//            'model' => $model,
//        ]);
//    }
//
//    /**
//     * Displays about page.
//     *
//     * @return string
//     */
//    public function actionAbout()
//    {
//        return $this->render('about');
//    }
}
