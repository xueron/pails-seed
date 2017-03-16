<?php
/**
 * session设置，可选的session适配器有file/redis/memcached。只能选择其中一个。
 */
return [
    'development' => [
        'adapter' => 'file',
        'options' => [
            'uniqueId' => 'pails_seed_',
        ],
    ],

    'testing' => [
        'adapter' => 'redis',
        'options' => [
            "uniqueId"   => "my-private-app",
            "host"       => "localhost",
            "port"       => 6379,
            "auth"       => "",
            "persistent" => false,
            "lifetime"   => 3600,
            "prefix"     => "my",
        ],
    ],

    'production' => [
        'adapter' => 'memcached',
        'options' => [
            "uniqueId" => "my-private-app",
            "host"     => "localhost",
            "port"     => 11211,
            "lifetime" => 3600,
            "prefix"   => "my",
        ],
    ],
];
