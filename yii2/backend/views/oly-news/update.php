<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OlyNews */

$this->title = '修改新闻: ' . $model->news_id;
$this->params['breadcrumbs'][] = ['label' => '新闻管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->news_id, 'url' => ['view', 'news_id' => $model->news_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oly-news-update">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <div class="oly-news-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'news_title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'news_abstract')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'news_content')->textarea(['rows' => 6]) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>

</div>
