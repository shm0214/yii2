<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OlyNews */

$this->title = '发布新闻';
$this->params['breadcrumbs'][] = ['label' => '新闻', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oly-news-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
