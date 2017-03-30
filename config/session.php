<?php
/**
 * session设置，可选的session适配器有file/redis/memcached。只能选择其中一个。
 */
return [
    'development' => [
        'adapter' => 'file',
        'cookie'  => 'pails_session',
        'options' => [
            'uniqueId' => 'pails_seed_',
        ],
    ],

    'testing' => [
        'adapter' => 'redis',
        'cookie'  => 'pails_session',
        'options' => [
            'uniqueId'   => 'my-private-app',
            'host'       => 'localhost',
            'port'       => 6379,
            'auth'       => '',
            'persistent' => false,
            'lifetime'   => 3600,
            'prefix'     => 'my',
        ],
    ],

    'production' => [
        'adapter' => 'memcached',
        'cookie'  => 'pails_session',
        'options' => [
            'uniqueId' => 'my-private-app',
            'host'     => 'localhost',
            'port'     => 11211,
            'lifetime' => 3600,
            'prefix'   => 'my',
        ],
    ],
];
