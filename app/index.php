<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

use MVCTask\Route\Router;

try {
    $routes = require_once 'routes.php';
    $router = new Router($routes);
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $router->dispatch($uri);
} catch (Exception $e) {
    echo '<br>';
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
