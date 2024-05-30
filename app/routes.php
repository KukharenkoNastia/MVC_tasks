<?php

use DockerTask\Controllers\AboutController;
use DockerTask\Controllers\HomeController;

$routes = [
    '/main' => [HomeController::class, 'index', 'get'],
    '/about' => [AboutController::class, 'index', 'get']
];

return $routes;