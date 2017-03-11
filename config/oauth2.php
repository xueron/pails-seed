<?php
return [
    'development' => [
        'private_key' => 'value',
        'public_key' => '',
        'client_credential' => [
            'enabled' => true,
            'token_ttl' => 3600,
        ],
        'password' => [
            'enabled' => true,
            'refresh_token_ttl' => 2592000,
            'token_ttl' => 3600,
        ],
        'auth_code' => [
            'enabled' => true,
            'code_ttl' => 3600,
            'refresh_token_ttl' => 2592000,
            'token_ttl' => 3600,
        ],
        'refresh_token' => [
            'enabled' => true,
            'token_ttl' => 3600
        ],
        'implicit' => [
            'enabled' => true,
            'token_ttl' => 3600
        ],
    ],
    'testing' => [
        'private_key' => 'value',
        'public_key' => '',
        'client_credential' => [
            'enabled' => true,
            'token_ttl' => 3600,
        ],
        'password' => [
            'enabled' => true,
            'refresh_token_ttl' => 2592000,
            'token_ttl' => 3600,
        ],
        'auth_code' => [
            'enabled' => true,
            'code_ttl' => 3600,
            'refresh_token_ttl' => 2592000,
            'token_ttl' => 3600,
        ],
        'refresh_token' => [
            'enabled' => true,
            'token_ttl' => 3600
        ],
        'implicit' => [
            'enabled' => true,
            'token_ttl' => 3600
        ],
    ],
    'production' => [
        'private_key' => 'value',
        'public_key' => '',
        'client_credential' => [
            'enabled' => true,
            'token_ttl' => 3600,
        ],
        'password' => [
            'enabled' => true,
            'refresh_token_ttl' => 2592000,
            'token_ttl' => 3600,
        ],
        'auth_code' => [
            'enabled' => true,
            'code_ttl' => 3600,
            'refresh_token_ttl' => 2592000,
            'token_ttl' => 3600,
        ],
        'refresh_token' => [
            'enabled' => true,
            'token_ttl' => 3600
        ],
        'implicit' => [
            'enabled' => true,
            'token_ttl' => 3600

        ],
    ]
];
