<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OlyNewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Oly News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oly-news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Oly News', ['create'], ['class' => 'btn btn-success']) ?>
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
            'news_cover',
            // 'news_id',
            'news_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
