<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by anqi 1913630, 20211128
 * This is news-comment update view of the backend web.
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OlyNewscomment */

$this->title = '修改评论: ' . $model->cmt_id;
$this->params['breadcrumbs'][] = ['label' => '新闻评论', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cmt_id, 'url' => ['view', 'cmt_id' => $model->cmt_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oly-newscomment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
