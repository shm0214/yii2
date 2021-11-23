<?php
namespace backend\controllers;
 
use yii\base\Action;
 
class Download extends Action {
 
    //这里面的三个参数的值是通过控制器actions中配置而来的
    public $param1 = null;
    public $param2 = null;
    public $param3 = null;
 
    public function run() {
        echo "test run param1: {$this->param1} param2: {$this->param2} param3: {$this->param3}";
    }
}