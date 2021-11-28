<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AuthAssignmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '权限管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-assignment-index">
<!-- <?php
    // $models = array_values($dataProvider->getModels());

    // foreach ($models as $index => $model) {
    //    echo $model['username'];
    // }
?> -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'user_id',
            // 'username',
            'item_name',
            ['class' => 'yii\grid\ActionColumn','template' => '{view} {update}'],
        ],
    ]); ?>


</div>
