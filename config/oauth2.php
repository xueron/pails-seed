<?php
/**
 * OAuth相关配置
 */
return [
    'development' => [
        /*
         * 私钥文件路径，作为AS服务器必须配置
         */
        'private_key'       => 'value',

        /*
         * 公钥文件路径，作为RS或者AS都需要配置，跟AS的私钥是一对的
         */
        'public_key'        => '',

        /*
         * 作为客户端的配置
         */
        'client'            => [
            'client_id'          => '625e9f57-c885-48eb-a2ab-51bf66db010e', // 应用APP ID，由AS颁发
            'client_secret'      => 'VGlDRlc1MG8yK2xwekxNQzhqOGNoZz09', // 应用的密钥
            'redirect_url'       => 'http://local-3th.dovecot.cn/oauth/ud', // 应用的回调地址
            'authorize_url'      => 'http://local-as.dovecot.cn/api/oauth/authorize', // AS 的认证地址
            'access_token_url'   => 'http://local-as.dovecot.cn/api/oauth/access_token', // AS 的token获取地址
            'resource_owner_url' => 'http://local-as.dovecot.cn/api/user', // AS 获取用户信息的地址
        ],

        /*
         * AS相关，支持的授权方案：client_credential
         */
        'client_credential' => [
            'enabled'   => true,
            'token_ttl' => 3600,
        ],

        /*
         * AS相关，支持的授权方案：password
         */
        'password'          => [
            'enabled'           => true,
            'refresh_token_ttl' => 2592000,
            'token_ttl'         => 3600,
        ],

        /*
         * AS相关，支持的授权方案：auth_code
         */
        'auth_code'         => [
            'enabled'           => true,
            'code_ttl'          => 3600,
            'refresh_token_ttl' => 2592000,
            'token_ttl'         => 3600,
        ],

        /*
         * AS相关，支持的授权方案：refresh_token
         */
        'refresh_token'     => [
            'enabled'   => true,
            'token_ttl' => 3600,
        ],

        /*
         * AS相关，支持的授权方案：implicit
         */
        'implicit'          => [
            'enabled'   => true,
            'token_ttl' => 3600,
        ],
    ],

    'testing' => [
        'private_key'       => 'value',
        'public_key'        => '',
        'client_credential' => [
            'enabled'   => true,
            'token_ttl' => 3600,
        ],
        'password'          => [
            'enabled'           => true,
            'refresh_token_ttl' => 2592000,
            'token_ttl'         => 3600,
        ],
        'auth_code'         => [
            'enabled'           => true,
            'code_ttl'          => 3600,
            'refresh_token_ttl' => 2592000,
            'token_ttl'         => 3600,
        ],
        'refresh_token'     => [
            'enabled'   => true,
            'token_ttl' => 3600,
        ],
        'implicit'          => [
            'enabled'   => true,
            'token_ttl' => 3600,
        ],
    ],

    'production' => [
        'private_key'       => 'value',
        'public_key'        => '',
        'client_credential' => [
            'enabled'   => true,
            'token_ttl' => 3600,
        ],
        'password'          => [
            'enabled'           => true,
            'refresh_token_ttl' => 2592000,
            'token_ttl'         => 3600,
        ],
        'auth_code'         => [
            'enabled'           => true,
            'code_ttl'          => 3600,
            'refresh_token_ttl' => 2592000,
            'token_ttl'         => 3600,
        ],
        'refresh_token'     => [
            'enabled'   => true,
            'token_ttl' => 3600,
        ],
        'implicit'          => [
            'enabled'   => true,
            'token_ttl' => 3600,

        ],
    ],
];
