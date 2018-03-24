<?php

$mid = function($resquest, $response, $next) {
    $response->getBody()->write('Start Middleware');
    $response = $next($resquest, $response);
    $response->getBody()->write('End Middleware');
    return $response;
};

$app->add($mid);
