<?php
session_start();

require '../vendor/autoload.php';
$settings = require '../src/settings.php';

$app = new \Slim\App($settings);
require '../src/Middlewares/Middleware.php';
require '../src/dependencies.php';
require '../src/routes.php';
$app->run();
