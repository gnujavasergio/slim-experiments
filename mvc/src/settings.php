<?php

return [
    'settings' => [
        'displayErrorDetails' => true,
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log'
        ],
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/'
        ],
        'db' => [
            'database_type' => 'mysql',
            'database_name' => 'uasb_mvc',
            'server' => 'localhost',
            'username' => 'root',
            'password' => 'javaes10puntos',
            'charset' => 'utf8'
        ]
    ]
];
