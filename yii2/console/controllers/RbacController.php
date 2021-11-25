<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();

        $super = $auth->createPermission('super');
        $super->description = 'super admin';
        $auth->add($super);

        $managePost = $auth->createPermission('managePost');
        $managePost->description = 'manage post';
        $auth->add($managePost);

        $speak = $auth->createPermission('speak');
        $speak->description = 'Leaving a message';
        $auth->add($speak);

        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $super);
        $auth->addChild($admin, $managePost);
        $auth->addChild($admin, $speak);

        $poster = $auth->createRole('poster');
        $auth->add($poster);
        $auth->addChild($poster, $managePost);
        $auth->addChild($poster, $speak);

        $speaker = $auth->createRole('speaker');
        $auth->add($speaker);
        $auth->addChild($speaker, $speak);
    }
}