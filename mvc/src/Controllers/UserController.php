<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends BaseController {

    public function show($request, $response) {
        $path = $this->router->pathFor('mt');
        return $this->view->render($response, 'index.phtml', compact('path'));
    }

    public function users($request, $response) {
        $user = new User($this->container);
        $all = $user->select('*');
        //var_dump($all);
        return $this->view->render($response, 'users.phtml', compact('all'));
    }

}
