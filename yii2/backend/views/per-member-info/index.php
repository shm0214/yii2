<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by baying 1911537, 20211128
 * This is team-member-info index view of the backend web.
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PerMemberInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '成员信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="per-member-info-index">

    <p>
        <?= Html::a('添加成员', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'sid',
            'name:ntext',
            'introduction:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
