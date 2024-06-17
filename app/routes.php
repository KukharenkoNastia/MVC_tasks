<?php

declare(strict_types=1);

use MVCTask\Controllers\AboutController;
use MVCTask\Controllers\HomeController;

$routes = [
    '/main' => [HomeController::class, 'index', 'get'],
    '/about' => [AboutController::class, 'index', 'get'],
    '/about/:id' => [AboutController::class, 'about', 'post']
];

return $routes;