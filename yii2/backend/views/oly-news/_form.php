<?php

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

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
