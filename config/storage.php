<?php
return [
    'development' => [
        'filesystem' => 'localFs', // Default storage: localFs or ossFs (if enabled)
        'local'      => [
            'root' => __DIR__ . '/../storage', // optional, default to ~/storage
        ],
    ],
    'testing'     => [
        'filesystem' => 'localFs', // localFs or ossFs(if enabled)
        'local'      => [
            'root' => __DIR__ . '/../storage', // optional, default to ~/storage
        ],
    ],
    'production'  => [
        'filesystem' => 'localFs', // localFs or ossFs(if enabled)
        'local'      => [
            'root' => __DIR__ . '/../storage', // optional, default to ~/storage
        ],
    ],
];
