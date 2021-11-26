<?php

namespace frontend\controllers;

use frontend\models\OlyGameInfo;
use frontend\models\OlyTypeInfo;
use Yii;
use yii\web\Controller;


class ResultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($game = null, $type_id = null)
    {
        if (isset($game)){
            $game = OlyGameInfo::findByGameCode($game);
            $type = null;
            if(isset($type_id))
                $type = OlyTypeInfo::findByTypeId($type_id);
            $game_id = $game['game_id'];
            $sql = 'SELECT * FROM oly_type_info WHERE game_id = :id';
            $types = OlyTypeInfo::findBySql($sql, ['id' => $game_id])->asArray()->all();
            return $this->render('view', [
                'game' => $game,
                'type' => $type,
                'types' => $types,
            ]);
        }
        else
            Yii::$app->session->setFlash('error', 'URL错误');
        return $this->render('index');
    }
}
