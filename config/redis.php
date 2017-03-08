<?php
return [
    'development' => [
        'enable' => true,
        'host' => 'localhost',
        'port' => 6379,
        'auth' => '',
        'persistent' => true
    ],
    'testing' => [
        'enable' => false,
        'host' => '',
        'port' => '',
        'auth' => '',
        'persistent' => true
    ],
    'production' => [
        'enable' => false,
        'host' => '',
        'port' => '',
        'auth' => '',
        'persistent' => true
    ]
];