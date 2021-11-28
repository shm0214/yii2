<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by anqi 1913630, 20211128
 * This is file-upload form view of the backend web.
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title='文件上传';
?>

<div class="card col-4">
    <div class="card-header">
            <h1 class="card-title">图片上传<font color="red">(最大1MB)</font></h1>
    </div>
    <div class="card-body">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
        <?= $form->field($model, 'imageFile')->fileInput() ?>
        <?= Html::submitButton('上传', ['class' => 'btn btn-primary btn-block']) ?>
        <?php ActiveForm::end() ?>
    </div>
    <!-- /.login-card-body -->
</div>