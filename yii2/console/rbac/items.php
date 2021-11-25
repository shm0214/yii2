<?php

return [
    'super' => [
        'type' => 2,
        'description' => 'super admin',
    ],
    'managePost' => [
        'type' => 2,
        'description' => 'manage post',
    ],
    'speak' => [
        'type' => 2,
        'description' => 'Leaving a message',
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'super',
            'managePost',
            'speak',
        ],
    ],
    'poster' => [
        'type' => 1,
        'children' => [
            'managePost',
            'speak',
        ],
    ],
    'speaker' => [
        'type' => 1,
        'children' => [
            'speak',
        ],
    ],
];
