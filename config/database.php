<?php

return [
    'default' => env('DB_CONNECTION', 'site1'), // Default to site1

    'connections' => [
        'site1' => [
            'driver' => 'mysql', 
            'host' => env('DB_SITE1_HOST'),
            'port' => env('DB_SITE1_PORT', '5432'),
            'database' => env('DB_SITE1_DATABASE'),
            'username' => env('DB_SITE1_USERNAME'),
            'password' => env('DB_SITE1_PASSWORD'),
            'charset' => 'utf8',
            'sslmode' => 'require', // Aiven typically requires SSL
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ],
        ],

        'site2' => [
            'driver' => 'mysql',
            'host' => env('DB_SITE2_HOST'),
            'port' => env('DB_SITE2_PORT', '5432'),
            'database' => env('DB_SITE2_DATABASE'),
            'username' => env('DB_SITE2_USERNAME'),
            'password' => env('DB_SITE2_PASSWORD'),
            'charset' => 'utf8',
            'sslmode' => 'require',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ],
        ],
    ],
];