<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by anqi 1913630, 20211128
 * This is news-comment form view of the backend web.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OlyNewscomment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oly-newscomment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cmt_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cmt_trashed')->radioList([1=>'删除',0=>'未删除']);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
