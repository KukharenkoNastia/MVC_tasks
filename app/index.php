<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

use DockerTask\Route\Router;

try {
    $routes = require_once 'routes.php';
    $router = new Router($routes);
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $method = $_SERVER['REQUEST_METHOD'];
    $params = $_SERVER['argv'];
    $router->dispatch($uri, $method, $params);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
