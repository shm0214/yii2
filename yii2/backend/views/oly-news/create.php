<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by anqi 1913630, 20211128
 * This is news create view of the backend web.
 */

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
