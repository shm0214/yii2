<?php

namespace backend\controllers;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use Yii;
use yii\filters\AccessControl;

/**
 * PostController implements post auth manager.
 */
class AdminController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [      
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'actions' => ['index', 'view','create','update','delete'],
                            'allow' => true,
                            'roles' => ['@'],
                            'roles' => ['super'],
                        ],
                    ],
                ],
            ]
        );
    }
}
