<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OlyNewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Oly News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oly-news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Oly News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->news_id), ['view', 'news_id' => $model->news_id]);
        },
    ]) ?>


</div>
