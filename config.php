<?php
return [
    'app_name' => 'Boss Battle App',
    'database' => [
        'host' => '127.0.0.1',
        'username' => 'app_user',
        'credentials' => getenv('db_credentials'),
        'name' => 'boss_battle',
    ],
];
