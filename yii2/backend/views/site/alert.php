<?php
use yii\bootstrap4\Alert;
echo Alert::widget([
  'options' => [
      'class' => 'alert-danger',
  ],
  'body' => $msg,
]);