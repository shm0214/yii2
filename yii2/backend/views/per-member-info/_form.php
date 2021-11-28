<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by baying 1911537, 20211128
 * This is team-member-info form view of the backend web.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PerMemberInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="per-member-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'id')->textInput() ?> -->

    <?= $form->field($model, 'sid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'introduction')->textarea(['rows' => 6]) ?>

    <!-- <?= $form->field($model, 'image_path')->textInput(['maxlength' => true]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
