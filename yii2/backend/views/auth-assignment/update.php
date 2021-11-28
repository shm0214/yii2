<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AuthAssignment */

$this->title = '修改用户权限：' . $model->item_name;
$this->params['breadcrumbs'][] = ['label' => '用户权限', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->item_name, 'url' => ['view', 'item_name' => $model->item_name, 'user_id' => $model->user_id]];
$this->params['breadcrumbs'][] = '修改用户权限';
?>
<div class="auth-assignment-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
