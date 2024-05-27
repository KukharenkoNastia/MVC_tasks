<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

use DockerTask\Route\Router;

$routes = require_once 'routes.php';
$router = new Router($routes);
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->chooseController($uri);

