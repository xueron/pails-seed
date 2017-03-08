<?php
/**
 * app.php
 *
 */
return [
    'development' => [
        'debug' => true,
        'key' => 'xxxxxxxxxxxxxxx',
        'model' => [
            'cache' => [
                'lifetime' => 3600,
            ]
        ],
        'view' => [
            'cache' => [
                'lifetime' => 3600,
            ]
        ]
    ],
    'testing' => [
        'debug' => true,
        'key' => 'xxxxxxxxxxxxxxx',
        'model' => [
            'cache' => [
                'lifetime' => 3600,
            ]
        ],
        'view' => [
            'cache' => [
                'lifetime' => 3600,
            ]
        ]
    ],
    'production' => [
        'debug' => true,
        'key' => 'xxxxxxxxxxxxxxx',
        'model' => [
            'cache' => [
                'lifetime' => 3600,
            ]
        ],
        'view' => [
            'cache' => [
                'lifetime' => 3600,
            ]
        ]

    ]
];
