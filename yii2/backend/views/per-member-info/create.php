<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by baying 1911537, 20211128
 * This is team-member-info create view of the backend web.
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PerMemberInfo */

$this->title = '添加成员';
$this->params['breadcrumbs'][] = ['label' => '团队成员信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="per-member-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
