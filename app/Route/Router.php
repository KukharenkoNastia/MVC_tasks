<?php

declare(strict_types=1);

namespace DockerTask\Route;

use DockerTask\Controllers\AboutController;
use DockerTask\Controllers\HomeController;
use Exception;

class Router
{

    public function __construct(
        protected array $routes = []
    )
    {
    }

    /**
     * @throws Exception
     */
    public function dispatch(string $uri, string $method, array $params): void
    {
        $uri = rtrim($uri, '/');

        if (!(array_key_exists($uri, $this->routes) && strtoupper($this->routes[$uri][2]) == $method)) {
            throw new Exception('404');
        }

        $this->callAction($this->routes[$uri][0], $this->routes[$uri][1]);
    }

    private function callAction(string $controller, string $action): void
    {
        $controller = "{$controller}";
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }

        $controller->$action();
    }
}
