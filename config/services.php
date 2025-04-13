<?php

return [
    'users1' => [
        'base_uri' => env('USER1_SERVICE_BASE_URL', 'https://lumenlaravel-elan-1.onrender.com/'),
        'secret' => env('USERS1_SERVICE_SECRET'),
    ],
    'users2' => [
        'base_uri' => env('USER2_SERVICE_BASE_URL', 'https://lumenlaravel-elan2.onrender.com/'),
        'secret' => env('USERS2_SERVICE_SECRET'),
    ],
];