<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by anqi 1913630, 20211128
 * This is poster access rules of the backend web.
 */

namespace backend\controllers;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use Yii;
use yii\filters\AccessControl;

/**
 * PostController implements post auth manager.
 */
class PostController extends Controller
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
                            'roles' => ['managePost'],
                        ],
                    ],
                ],
            ]
        );
    }
}
