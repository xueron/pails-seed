<?php
/**
 * app.php
 */
return [
    'development' => [
        /*
         * app.name 系统名称
         */
        'name'  => 'Pails, A PHP framework base on Phalcon.',

        /*
         * app.debug 是否开启调试模式，在 index.php 里面统一配置
         */
        'debug' => constant('APP_DEBUG') ?: false,
        /*
         * app.key 加密用到的Key，启用Cookie的时候会用到
         */
        'key'   => 'xxxxxxxxxxxxxxx',
        /*
         * app.model.cache.lifetime model的缓存以及其他设置
         */
        'model' => [
            'cache' => [
                'lifetime' => 3600,
            ],
        ],
        /*
         * app.view.cache.lifetime 视图的缓存等设置
         */
        'view'  => [
            'cache' => [
                'lifetime' => 3600,
            ],
        ],
    ],

    'testing'    => [
        'name'  => 'Pails, A PHP framework base on Phalcon.',
        'debug' => true,
        'key'   => 'xxxxxxxxxxxxxxx',
        'model' => [
            'cache' => [
                'lifetime' => 3600,
            ],
        ],
        'view'  => [
            'cache' => [
                'lifetime' => 3600,
            ],
        ],
    ],

    'production' => [
        'name'  => 'Pails, A PHP framework base on Phalcon.',
        'debug' => true,
        'key'   => 'xxxxxxxxxxxxxxx',
        'model' => [
            'cache' => [
                'lifetime' => 3600,
            ],
        ],
        'view'  => [
            'cache' => [
                'lifetime' => 3600,
            ],
        ],
    ],
];
