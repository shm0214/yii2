<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OlyNewscomment */

$this->title = 'Create Oly Newscomment';
$this->params['breadcrumbs'][] = ['label' => 'Oly Newscomments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oly-newscomment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
