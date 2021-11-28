<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PerMemberInfo */

$this->title = '团队成员信息: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '团队成员信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="per-member-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
