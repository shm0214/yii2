<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OlyContactFormSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Oly Contact Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oly-contact-form-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            'contact_id',
            'username',
            'email:email',
            'address',
            'message',

            ['class' => 'yii\grid\ActionColumn','template' => '{view}'],
        ],
    ]); ?>


</div>
