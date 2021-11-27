<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title='文件上传';
?>

<div class="card col-4">
    <div class="card-body">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
        <?= $form->field($model, 'imageFile')->fileInput() ?>
        <?= Html::submitButton('上传', ['class' => 'btn btn-primary btn-block']) ?>
        <?php ActiveForm::end() ?>
    </div>
    <!-- /.login-card-body -->
</div>