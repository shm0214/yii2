<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OlyNewscomment */

$this->title = 'Update Oly Newscomment: ' . $model->cmt_id;
$this->params['breadcrumbs'][] = ['label' => 'Oly Newscomments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cmt_id, 'url' => ['view', 'cmt_id' => $model->cmt_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oly-newscomment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
