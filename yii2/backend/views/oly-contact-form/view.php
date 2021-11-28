<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by gongan 1913076, 20211128
 * This is contact-form view of the backend web.
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\OlyContactForm */

$this->title = $model->contact_id;
$this->params['breadcrumbs'][] = ['label' => 'Oly Contact Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="oly-contact-form-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'contact_id',
            'username',
            'email:email',
            'address',
            'message',
        ],
    ]) ?>

</div>
