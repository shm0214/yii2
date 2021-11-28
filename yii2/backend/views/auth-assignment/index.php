<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by anqi 1913630, 20211128
 * This is auth-assign index of the backend web.
 */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\VarDumper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AuthAssignmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '权限管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-assignment-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'user_id',
            [
                'attribute' => 'user_name',
                'value' => 'user.username',
                'label' => '用户名',
            ],
            'item_name',
            ['class' => 'yii\grid\ActionColumn','template' => '{view} {update}'],
        ],
    ]); ?>


</div>
