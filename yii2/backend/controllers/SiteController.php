<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by anqi 1913630, 20211128
 * This is poster access rules of the backend web.
 */

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\UploadForm;
use yii\web\UploadedFile;
use backend\models\OlyContactForm;
use backend\models\OlyNewscomment;
use backend\models\OlyNews;
use backend\models\User;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error','alert'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['index','teamwork','personwork','upload'],
                        'allow' => true,
                        'roles' => ['managePost'],
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
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', [
            'contactCount' => OlyContactForm::find()->count(),
            'newsCount'=> OlyNews::find()->count(),
            'cmsCount' =>OlyNewscomment::find()->count(),
            'userCount'=>User::find()->count(),
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $this->layout='@app/views/layouts/main-login.php';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            if (!Yii::$app->user->can('managePost')) {
                Yii::$app->user->logout();
                return $this->render('alert',[
                    'type'=>'danger',
                    'head'=>'权限不足',
                    'msg'=>'',
                ]); 
            }
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /** 
     * Displays teamwork page.
     * 
     * @return string
     */
    public function actionTeamwork()
    {
        return $this->render('teamwork');
    }

    /** 
     * Displays personal work page.
     * 
     * @return string
     */
    public function actionPersonwork()
    {
        return $this->render('personwork');
    }

    /** 
     * Displays personal work page.
     * 
     * @return string
     */
    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $path=$model->upload();
            return $this->render('alert',[
                'type'=>'success',
                'head'=>'文件上传成功',
                'msg'=> $path,
            ]); 
        }

        return $this->render('upload', ['model' => $model]);
    }
}
