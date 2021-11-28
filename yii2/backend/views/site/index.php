<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by anqi 1913630, 20211128
 * This is index view of the backend web.
 */

$this->title = '主页';
$this->params['breadcrumbs'] = [['label' => $this->title]];
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <?= \hail812\adminlte\widgets\Callout::widget([
                'type' => 'success',
                'head' => '欢迎',
                'body' => '请在侧边栏选择功能。'
            ]) ?>
        </div>
    </div>
</div>
<div class="container-fluid">

    <div class="row">
        <div class="col-md-4 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => '评论总数',
                'number' => $cmsCount,
                'theme' => 'info',
                'icon' => 'far fa-comments',
            ]) ?>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => '用户总数',
                'number' => $userCount,
                'theme' => 'info',
                'icon' => 'fas fa-users',
            ]) ?>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => '新闻总数',
                'number' =>  $newsCount,
                'theme' => 'info',
                'icon' => 'fas fa-newspaper',
            ]) ?>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => '联系请求数',
                'number' => $contactCount,
                'theme' => 'gradient-warning',
                'icon' => 'fas fa-phone-volume',
            ]) ?>
        </div>
    </div>

</div>