<?php

namespace app\controllers;

use app\models\Participant;
use app\models\Project;
use Yii;
use app\models\Publication;
use app\models\PublicationSearch;
use app\models\Author;
use app\models\AuthorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PublicationController implements the CRUD actions for Publication model.
 */
class PublicationController extends Controller
{
    /**
     * {@inheritdoc}
     */
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

    /**
     * 传递信息给论文页面
     */
    public function actionGroupPublication()
    {
        $queryPub = Publication::find();
        $queryAut = Author::find();
        $queryPro = Project::find();
        $queryPar = Participant::find();
        $publications = $queryPub->orderBy('id')
            ->all();
        $authors = $queryAut->orderBy('id')->all();
        $projects = $queryPro->orderBy('id')->all();
        $participants = $queryPar->orderBy('id')->all();

        return $this->render('group-publication',[
            'publications' => $publications,
            'authors' => $authors,
            'projects' => $projects,
            'participants' => $participants,
        ]);
    }


    public function actionOnePublication()
    {
        $queryPub = Publication::find();
        $queryAut = Author::find();
        $queryPro = Project::find();
        $queryPar = Participant::find();
        $publications = $queryPub->orderBy('id')
            ->all();
        $authors = $queryAut->orderBy('id')->all();
        $projects = $queryPro->orderBy('id')->all();
        $participants = $queryPar->orderBy('id')->all();

        return $this->render('one-publication',[
            'publications' => $publications,
            'authors' => $authors,
            'projects' => $projects,
            'participants' => $participants,
        ]);
    }

    /**
     * Lists all Publication models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PublicationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Publication model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Publication model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Publication();

//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        }

        if (Yii::$app->request->isPost) {
            $model->pdfFile = UploadedFile::getInstance($model, 'pdfFile');
            $model->imgFile = UploadedFile::getInstance($model, 'imgFile');
            if ($model->upload()) {
                // 文件上传成功
                if($model->pdfFile!=null){
                    $model->pdf = 'uploads/pdf/' . $model->pdfFile->baseName . '.' . $model->pdfFile->extension;
                }else{
                    $model->pdf = '';
                }
                if($model->imgFile!=null){
                    $model->img = 'uploads/publicationimg/' . $model->imgFile->baseName . '.' . $model->imgFile->extension;
                }else{
                    $model->img = '';
                }
                if ($model->load(Yii::$app->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Publication model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        }

        if (Yii::$app->request->isPost) {
            $model->pdfFile = UploadedFile::getInstance($model, 'pdfFile');
            $model->imgFile = UploadedFile::getInstance($model, 'imgFile');
            if ($model->upload()) {
                // 文件上传成功
                if($model->pdfFile!=null){
                    $model->pdf = 'uploads/pdf/' . $model->pdfFile->baseName . '.' . $model->pdfFile->extension;
                }
                if($model->imgFile!=null){
                    $model->img = 'uploads/publicationimg/' . $model->imgFile->baseName . '.' . $model->imgFile->extension;
                }
                if ($model->load(Yii::$app->request->post()) && $model->save()) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Publication model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Publication model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Publication the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Publication::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
