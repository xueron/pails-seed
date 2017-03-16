<?php
/**
 * 数据库配置，以及只读库详细配置
 */
return [
    'development' => [
        /*
         * 表的前缀
         */
        'prefix'     => '',

        /*
         * 是否启用自动复数
         */
        'use_plural' => true,

        /*
         * 是否启用读写分离。注意，当前文件只负责配置slave，master的配置，请去database.yml
         */
        'use_slave'  => false,

        /*
         * 只读服务器的配置.
         */
        'slave'      => [
            'host'    => '',
            'name'    => '',
            'user'    => '',
            'pass'    => '',
            'charset' => 'utf8',
        ]
    ],

    'testing' => [
        /*
         * 表的前缀
         */
        'prefix'     => '',

        /*
         * 是否启用自动复数
         */
        'use_plural' => true,

        /*
         * 是否启用读写分离。注意，当前文件只负责配置slave，master的配置，请去database.yml
         */
        'use_slave'  => false,

        /*
         * 只读服务器的配置.
         */
        'slave'      => [
            'host'    => '',
            'name'    => '',
            'user'    => '',
            'pass'    => '',
            'charset' => 'utf8',
        ]
    ],

    'production' => [
        /*
         * 表的前缀
         */
        'prefix'     => '',

        /*
         * 是否启用自动复数
         */
        'use_plural' => true,

        /*
         * 是否启用读写分离。注意，当前文件只负责配置slave，master的配置，请去database.yml
         */
        'use_slave'  => false,

        /*
         * 只读服务器的配置.
         */
        'slave'      => [
            'host'    => '',
            'name'    => '',
            'user'    => '',
            'pass'    => '',
            'charset' => 'utf8',
        ]
    ]
];
