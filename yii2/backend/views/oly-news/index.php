<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OlyNewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '新闻管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oly-news-index">
    <?php Pjax::begin(); ?> 
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('发布新闻', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'news_title',
            'news_abstract',
            // 'news_content:ntext',
            // 'news_cover',
            'news_id',
            // 'news_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

 <?php Pjax::end(); ?> 

</div>
