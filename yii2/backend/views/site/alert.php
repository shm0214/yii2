<?php

/**
 * Team: DON'T KNOW PHP, NKU
 * Coding by anqi 1913630, 20211128
 * This is alert view of the backend web.
 */

$this->title='';

echo \hail812\adminlte\widgets\Callout::widget([
    'type' => $type,
    'head' => $head,
    'body' => $msg,
]);
?>