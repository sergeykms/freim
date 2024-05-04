<?php

namespace App\Application\Router;

use App\Controllers\PagesController;

class Router implements RouterInterface
{

    public function route(array $routes): void
    {
        $path = $_SERVER["REQUEST_URI"];
        foreach ($routes as $route) {
            if ($route['uri'] === $path) {
                $controller = new $route['controller']();
                $controller->getViews($route['views']);
                return;
            }
        }
        $controller = new PagesController();
        $controller->getViews('404');
    }
}