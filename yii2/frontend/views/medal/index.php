<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MedalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Medals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medal-index">

    <h1><?= Html::encode($this->title) ?>
    </h1>


    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]);?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'name_zh',
                'value' => 'team.name_zh',
                'label' => '国家名',
            ],
            'gold',
            'silver',
            'bronze',
            'total',
            //'rank',
            // 'name_zh'
            

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>