<?php

namespace backend\controllers;

use app\models\PerMemberInfo;
use app\models\PerMemberInfoSearch;
use yii\web\Controller;
use backend\controllers\AdminController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use Yii;
use yii\filters\AccessControl;

/**
 * PerMemberInfoController implements the CRUD actions for PerMemberInfo model.
 */
class PerMemberInfoController extends AdminController
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
     * Lists all PerMemberInfo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PerMemberInfoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerMemberInfo model.
     * @param int $id 成员的编号
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
     * Creates a new PerMemberInfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PerMemberInfo();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PerMemberInfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id 成员的编号
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PerMemberInfo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id 成员的编号
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerMemberInfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id 成员的编号
     * @return PerMemberInfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PerMemberInfo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}