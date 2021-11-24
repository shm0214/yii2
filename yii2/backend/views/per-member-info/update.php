<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PerMemberInfo */

$this->title = 'Update Per Member Info: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Per Member Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="per-member-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
