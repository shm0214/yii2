<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OlyNewscomment */

$this->title = $model->cmt_id;
$this->params['breadcrumbs'][] = ['label' => 'Oly Newscomments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="oly-newscomment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'cmt_id' => $model->cmt_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'cmt_id' => $model->cmt_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cmt_id',
            'cmt_userid',
            'cmt_date',
            'cmt_content:ntext',
            'cmt_newsid',
            'cmt_trashed',
        ],
    ]) ?>

</div>
