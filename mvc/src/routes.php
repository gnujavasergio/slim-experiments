<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/company/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
  $this->iouoiupo;
    $result = "hola" . $name;
    $response->getBody()->write($result);

    return $response;
});
?>