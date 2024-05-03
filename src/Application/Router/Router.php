<?php

namespace App\Application\Router;

class Router implements RouterInterface
{

    public function route(array $routes): void
    {
        $path = $_SERVER["REQUEST_URI"];
        foreach ($routes as $route) {
            if ($route['uri'] === $path) {
                $controller = new $route['controller']();
                $method = $route['method'];
                $controller->$method();

            }
        }
    }
}