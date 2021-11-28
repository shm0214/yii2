<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by gongan 1913076, 20211128
 * This is contact-form index of the backend web.
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OlyContactFormSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '联系表单';
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
