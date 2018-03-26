<?php

require 'vendor/autoload.php';
$app = \Base::instance();
$app->route('GET /',
    function() {
        echo 'Hola Mundo!';
    }
);

$app->run();