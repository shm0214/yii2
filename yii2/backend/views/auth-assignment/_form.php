<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by anqi 1913630, 20211128
 * This is auth-assign form of the backend web.
 */


use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AuthAssignment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auth-assignment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_name')->dropDownList(
        ['admin'=>'admin','poster'=>'poster', 'speaker'=>'speaker']
    );
    ?>

    <!-- <?= $form->field($model, 'user_id')->textInput(['maxlength' => true]) ?> -->

    <!-- <?= $form->field($model, 'created_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>