<?php
/**
 * app.php
 *
 */
return [
    'development' => [
        /*
         * 是否开启调试模式，在 index.php 里面统一配置
         */
        'debug' => constant('APP_DEBUG') ?: false,

        /*
         * 加密用到的Key，启用Cookie的时候会用到
         */
        'key'   => 'xxxxxxxxxxxxxxx',

        /*
         * model的缓存以及其他设置
         */
        'model' => [
            'cache' => [
                'lifetime' => 3600,
            ],
        ],

        /*
         * 视图的缓存等设置
         */
        'view'  => [
            'cache' => [
                'lifetime' => 3600,
            ],
        ],
    ],

    'testing' => [
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
