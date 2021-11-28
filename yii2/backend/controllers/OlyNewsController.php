<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by anqi 1913630, 20211128
 * This is news controller of the backend web.
 */

namespace backend\controllers;

use backend\models\OlyNews;
use backend\models\OlyNewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use backend\models\UploadForm;

/**
 * OlyNewsController implements the CRUD actions for OlyNews model.
 */
class OlyNewsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all OlyNews models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OlyNewsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OlyNews model.
     * @param string $id 新闻标识
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
     * Creates a new OlyNews model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new OlyNews();
        $filemodel=new UploadForm();

        if ($this->request->isPost) {
            if($model->load($this->request->post())){
                $filemodel->imageFile = UploadedFile::getInstance($model, 'news_cover');
                $path=$filemodel->upload();
                $model->news_cover=$path;
                $model->news_time=date('Y-m-d H:i:s');
                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->news_id]);
                }
            }

        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'filemodel'=>$filemodel,
        ]);
    }

    /**
     * Updates an existing OlyNews model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id 新闻标识
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->news_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing OlyNews model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id 新闻标识
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OlyNews model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id 新闻标识
     * @return OlyNews the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = OlyNews::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
