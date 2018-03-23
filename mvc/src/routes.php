<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/company/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $this->logger->addinfo('In home');
//    $this->iouoiupo;

    $result = "hola" . $name;
    $response->getBody()->write($result);

    return $response;
});

$app->get('/home/[{name}]', function(Request $request, Response $response, array $args) {
    return $this->view->render($response, 'index.phtml', $args);
});

$app->get('/users', '\App\Controllers\UserController:users')->setName('mt');
$app->get('/users/show', '\App\Controllers\UserController:show')->setName('mt');
