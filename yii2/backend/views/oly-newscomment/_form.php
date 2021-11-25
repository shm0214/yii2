<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OlyNewscomment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oly-newscomment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cmt_userid')->textInput() ?>

    <?= $form->field($model, 'cmt_date')->textInput() ?>

    <?= $form->field($model, 'cmt_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cmt_newsid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cmt_trashed')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
