<?php
/**
 * 缓存配置
 */
return [
    'development' => [
        /*
         * 文件缓存设置。默认cache服务使用多级缓存，file是必须的，redis、memcached如果开启，则会作为高速缓存，放在第一级
         */
        'file'     => [
            'lifetime' => 86400,
            'prefix'   => 'cache_',
        ],

        /*
         * redis作为缓存的设置。redis作为独立存储服务，在redis.php中单独设置。
         */
        'redis'    => [
            'enable'     => true,
            'lifetime'   => 3600,
            'prefix'     => 'cache_',
            'host'       => 'localhost',
            'port'       => '6379',
            'auth'       => '',
            'persistent' => true
        ],

        /*
         * memcached缓存服务
         */
        'memcache' => [
            'enable'     => false,
            'lifetime'   => 3600,
            'prefix'     => '',
            'host'       => '',
            'port'       => '',
            'persistent' => true
        ]
    ],

    'testing' => [
        'file'     => [
            'lifetime' => 86400,
            'prefix'   => '',
        ],
        'redis'    => [
            'enable'     => false,
            'lifetime'   => 3600,
            'prefix'     => '',
            'host'       => '',
            'port'       => '',
            'auth'       => '',
            'persistent' => true
        ],
        'memcache' => [
            'enable'     => false,
            'lifetime'   => 3600,
            'prefix'     => '',
            'host'       => '',
            'port'       => '',
            'persistent' => true
        ]
    ],

    'production' => [
        'file'     => [
            'lifetime' => 86400,
            'prefix'   => '',
        ],
        'redis'    => [
            'enable'     => false,
            'lifetime'   => 3600,
            'prefix'     => '',
            'host'       => '',
            'port'       => '',
            'auth'       => '',
            'persistent' => true
        ],
        'memcache' => [
            'enable'     => false,
            'lifetime'   => 3600,
            'prefix'     => '',
            'host'       => '',
            'port'       => '',
            'persistent' => true
        ]
    ]
];
