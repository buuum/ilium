<?php

namespace App;

use Ilium\Ilium;
use RouteF\RouteCollection;

/** @var $app Ilium */

$app->router->addRoutes(function (RouteCollection $router) {

    $router->get('/', function () {
        echo 'hello world';
    });

});