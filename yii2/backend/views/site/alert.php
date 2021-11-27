<?php
use yii\bootstrap4\Alert;
$this->title='';


echo \hail812\adminlte\widgets\Callout::widget([
    'type' => $type,
    'head' => $head,
    'body' => $msg,
]);
?>