<?php

declare(strict_types=1);

namespace DockerTask\Route;

use DockerTask\Controllers\AboutController;
use DockerTask\Controllers\HomeController;
use Exception;

class Router{
    protected $routes = [];

    public function __construct($routes) {
        $this->routes = $routes;
    }

    public function chooseController($uri)
    {
        $uri = rtrim($uri, '/');
        if (array_key_exists($uri, $this->routes)) {
            $this->callAction(
                ...explode('@', $this->routes[$uri])
            );
        } else {
            $this->sendNotFound();
        }
    }

    protected function callAction($controller, $action)
    {
        $controller = "DockerTask\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }

        $controller->$action();
    }

    private function sendNotFound()
    {
        http_response_code(404);
        echo "404 Not Found";
    }
}
