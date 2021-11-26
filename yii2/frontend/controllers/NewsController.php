<?php

namespace frontend\controllers;

use backend\models\OlyNewscomment;
use Yii;
use yii\web\Controller;
use frontend\models\OlyNewsSearch;

class NewsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($id = null)
    {
        if (isset($id)) {
            $searchModel = new OlyNewsSearch();
            $dataProvider = $searchModel->search(['id' => $id]);
            $models = $dataProvider->getModels();
            if ($models)
                return $this->render('view', ['model' => $models[0]]);
        }
        Yii::$app->session->setFlash('error', 'URL错误');
        return $this->render('index');
    }

    public function actionCreateComment($id)
    {
        $model = new OlyNewscomment();
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return;
            }
        }
    }
}
