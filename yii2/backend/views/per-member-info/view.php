<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by baying 1911537, 20211128
 * This is team-member-info view view of the backend web.
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PerMemberInfo */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '团队成员信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="per-member-info-view">

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
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
            // 'id',
            'sid',
            'name:ntext',
            'introduction:ntext',
            // 'image_path',
        ],
    ]) ?>

</div>
