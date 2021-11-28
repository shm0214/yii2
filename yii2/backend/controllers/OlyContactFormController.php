<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by gongan 1913076, 20211128
 * This is contact information controller of the backend web.
 */

namespace backend\controllers;

use backend\models\OlyContactForm;
use backend\models\OlyContactFormSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OlyContactFormController implements the CRUD actions for OlyContactForm model.
 */
class OlyContactFormController extends Controller
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
     * Lists all OlyContactForm models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OlyContactFormSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OlyContactForm model.
     * @param int $contact_id Contact ID
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
     * Finds the OlyContactForm model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $contact_id Contact ID
     * @return OlyContactForm the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = OlyContactForm::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
