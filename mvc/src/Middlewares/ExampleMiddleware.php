<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Middlewares;

/**
 * Description of ExampleMiddleware
 *
 * @author gnujavasergio
 */
class ExampleMiddleware extends BaseMiddleware {

    public function __invoke($resquest, $response, $next) {
        $response->getBody()->write('Start Class');
        $response = $next($resquest, $response);
        $response->getBody()->write('End Class');
        return $response;
    }

}
