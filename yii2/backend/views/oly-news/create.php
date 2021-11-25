<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OlyNews */

$this->title = 'Create Oly News';
$this->params['breadcrumbs'][] = ['label' => 'Oly News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oly-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
