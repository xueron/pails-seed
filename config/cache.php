<?php
return [
    'development' => [
        'file' => [
            'lifetime' => 86400,
            'prefix' => 'cache_',
        ],
        'redis' => [
            'enable' => true,
            'lifetime' => 3600,
            'prefix' => 'cache_',
            'host' => 'localhost',
            'port' => '6379',
            'auth' => '',
            'persistent' => true
        ],
        'memcache' => [
            'enable' => false,
            'lifetime' => 3600,
            'prefix' => '',
            'host' => '',
            'port' => '',
            'persistent' => true
        ]
    ],
    'testing' => [
        'file' => [
            'lifetime' => 86400,
            'prefix' => '',
        ],
        'redis' => [
            'enable' => false,
            'lifetime' => 3600,
            'prefix' => '',
            'host' => '',
            'port' => '',
            'auth' => '',
            'persistent' => true
        ],
        'memcache' => [
            'enable' => false,
            'lifetime' => 3600,
            'prefix' => '',
            'host' => '',
            'port' => '',
            'persistent' => true
        ]
    ],
    'production' => [
        'file' => [
            'lifetime' => 86400,
            'prefix' => '',
        ],
        'redis' => [
            'enable' => false,
            'lifetime' => 3600,
            'prefix' => '',
            'host' => '',
            'port' => '',
            'auth' => '',
            'persistent' => true
        ],
        'memcache' => [
            'enable' => false,
            'lifetime' => 3600,
            'prefix' => '',
            'host' => '',
            'port' => '',
            'persistent' => true
        ]
    ]
];
