<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by anqi 1913630, 20211128
 * This is teamwork view of the backend web.
 */

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '团队作业';

?>
<div class="card card-primary">
    <div class="card-header">
        <h1 class="card-title">团队：DON'T KHOW PHP, NKU</h1>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-5">
                <h4><a download href="../../data/team/test.pdf">需求文档</a></h4>
                <h4><a href="#">设计文档</a></h4>
                <h4><a href="#">实现文档</a></h4>
                <h4><a href="#">用户手册</a></h4>
                <h4><a href="#">项目展示PPT</a></h4>
                <h4><a href="#">源码</a></h4>
                <h4><a href="#">数据库文件</a></h4>
                <h4><a href="#">部署文档</a></h4>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        团队成员：安祺(1913630)、时浩铭(1911463)、巴瀛(1911537)、龚安(1913076)
    </div>

</div>