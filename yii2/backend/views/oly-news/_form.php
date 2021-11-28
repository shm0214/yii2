<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by anqi 1913630, 20211128
 * This is news form of the backend web.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker; 

/* @var $this yii\web\View */
/* @var $model backend\models\OlyNews */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oly-news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'news_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news_abstract')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'news_cover')->fileInput() ?>
    <p>注：<font color="red">图片最大1MB</font></p>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
