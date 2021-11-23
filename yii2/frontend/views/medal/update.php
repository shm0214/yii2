<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Medal */

$this->title = 'Update Medal: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Medals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
