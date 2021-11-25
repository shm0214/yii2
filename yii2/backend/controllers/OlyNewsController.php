<?php

namespace backend\controllers;

use app\models\OlyNews;
use app\models\OlyNewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\controllers\PostController;

/**
 * OlyNewsController implements the CRUD actions for OlyNews model.
 */
class OlyNewsController extends PostController
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
     * @param string $news_id 新闻标识
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($news_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($news_id),
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

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'news_id' => $model->news_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing OlyNews model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $news_id 新闻标识
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($news_id)
    {
        $model = $this->findModel($news_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'news_id' => $model->news_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing OlyNews model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $news_id 新闻标识
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($news_id)
    {
        $this->findModel($news_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OlyNews model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $news_id 新闻标识
     * @return OlyNews the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($news_id)
    {
        if (($model = OlyNews::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
