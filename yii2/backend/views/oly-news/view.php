<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OlyNews */

$this->title = $model->news_id;
$this->params['breadcrumbs'][] = ['label' => 'Oly News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="oly-news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'news_id' => $model->news_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'news_id' => $model->news_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'news_title',
            'news_abstract',
            'news_content:ntext',
            'news_cover',
            'news_id',
        ],
    ]) ?>

</div>