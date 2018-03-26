<?php

require 'vendor/autoload.php';


Flight::route('/', function(){
    echo 'hello world!';
});

Flight::route('/welcome', function(){
    echo 'Hola Curso!';
});


Flight::start();