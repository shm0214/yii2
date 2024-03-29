<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by anqi 1913630, 20211128
 * This is news index view of the backend web.
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OlyNewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '新闻管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oly-news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('发布新闻', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'news_title',
            'news_abstract',
            // 'news_content:ntext',
            // 'news_cover',
            // 'news_id',
            'news_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
