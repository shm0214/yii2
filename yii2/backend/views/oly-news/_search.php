<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OlyNewsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oly-news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'news_title') ?>

    <?= $form->field($model, 'news_abstract') ?>

    <?= $form->field($model, 'news_content') ?>

    <?= $form->field($model, 'news_cover') ?>

    <?= $form->field($model, 'news_id') ?>

    <?php // echo $form->field($model, 'news_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
