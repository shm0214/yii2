<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PerMemberInfo */

$this->title = 'Create Per Member Info';
$this->params['breadcrumbs'][] = ['label' => 'Per Member Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="per-member-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
