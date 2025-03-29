<?php

return [
    'users1' => [
        'base_uri' => env('USER1_SERVICE_BASE_URL', 'http://localhost:8000/'),
        'secret' => env('USERS1_SERVICE_SECRET'),
    ],
    'users2' => [
        'base_uri' => env('USER2_SERVICE_BASE_URL', 'http://localhost:8001/'),
        'secret' => env('USERS2_SERVICE_SECRET'),
    ],
];