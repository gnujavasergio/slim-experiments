<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->get('/suma/{a}/{b}', function (Request $request, Response $response, array $args) {
    $a = $args['a'];
    $b = $args['b'];
    $total = $a + $b;

    $response->getBody()->write("Total: $total");

    return $response;
});

$app->run();

