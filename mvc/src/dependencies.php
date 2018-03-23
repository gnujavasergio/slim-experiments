<?php

$container = $app->getContainer();

$container['logger'] = function($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], Monolog\Logger::DEBUG));
    return $logger;
};

$container['view'] = function($c) {
    $settings = $c->get('settings')['renderer'];
    return new \Slim\Views\PhpRenderer($settings['template_path']);
};

$container['db'] = function($c) {
    $settings = $c->get('settings')['db'];
    $database = new \Medoo\Medoo($settings);
    return $database;
};

