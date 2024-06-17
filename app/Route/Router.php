<?php

declare(strict_types=1);

namespace MVCTask\Route;

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
    public function dispatch(string $uri): void
    {
        $patterns = $this->createRegular();

        $result = 0;

        foreach ($patterns as $pattern => $route) {
            if (preg_match($pattern, $uri, $match)) {
                $result++;
                $this->callAction($route[0], $route[1], $match);
            }
        }

        if (!($result)) {
            throw new Exception('404');
        }
    }

    private function callAction(string $controller, string $action, array $params = []): void
    {
        $controller = "{$controller}";
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }

        isset($params[1]) ? $controller->$action($params[1]) : $controller->$action();
    }

    private function createRegular(): array
    {
        $patterns = [];
        foreach ($this->routes as $key => $route) {
            $pattern = preg_replace('/:\w+/', '([0-9]+)', $key);
            $pattern = '#^' . $pattern . '$#';
            $patterns[$pattern] = $route;
        }

        return $patterns;
    }
}
