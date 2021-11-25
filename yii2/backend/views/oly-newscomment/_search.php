<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OlyNewscommentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oly-newscomment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cmt_id') ?>

    <?= $form->field($model, 'cmt_userid') ?>

    <?= $form->field($model, 'cmt_date') ?>

    <?= $form->field($model, 'cmt_content') ?>

    <?= $form->field($model, 'cmt_newsid') ?>

    <?php // echo $form->field($model, 'cmt_trashed') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
