<?php

namespace backend\controllers;

use backend\models\OlyNewscomment;
use backend\models\OlyNewscommentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\controllers\PostController;
/**
 * OlyNewscommentController implements the CRUD actions for OlyNewscomment model.
 */
class OlyNewscommentController extends PostController
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
     * Lists all OlyNewscomment models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OlyNewscommentSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OlyNewscomment model.
     * @param string $cmt_id 评论标识
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($cmt_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($cmt_id),
        ]);
    }

    /**
     * Creates a new OlyNewscomment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new OlyNewscomment();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'cmt_id' => $model->cmt_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing OlyNewscomment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $cmt_id 评论标识
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($cmt_id)
    {
        $model = $this->findModel($cmt_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'cmt_id' => $model->cmt_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing OlyNewscomment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $cmt_id 评论标识
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($cmt_id)
    {
        $this->findModel($cmt_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OlyNewscomment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $cmt_id 评论标识
     * @return OlyNewscomment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($cmt_id)
    {
        if (($model = OlyNewscomment::findOne($cmt_id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
