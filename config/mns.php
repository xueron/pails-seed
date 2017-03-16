<?php
/**
 * 阿里云MSN消息服务的配置。
 */
return [
    'development' => [
        /*
         * 是否启用消息服务
         */
        'enable'    => false,

        /*
         * 端点
         */
        'endpoint'  => '',

        /*
         * accessId
         */
        'accessId'  => '',

        /*
         * accessKey
         */
        'accessKey' => '',
    ],

    'testing' => [
        'enable'    => false,
        'endpoint'  => '',
        'accessId'  => '',
        'accessKey' => '',
    ],

    'production' => [
        'enable'    => false,
        'endpoint'  => '',
        'accessId'  => '',
        'accessKey' => '',
    ],
];
