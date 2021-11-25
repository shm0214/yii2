<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OlyNewscommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Oly Newscomments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oly-newscomment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Oly Newscomment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->cmt_id), ['view', 'cmt_id' => $model->cmt_id]);
        },
    ]) ?>


</div>
