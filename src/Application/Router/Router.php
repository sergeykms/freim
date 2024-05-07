<?php

namespace App\Application\Router;

use App\Controllers\PagesController;

class Router implements RouterInterface
{
    use RouterHelpers;

    public function route(array $routes): void
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $path = $_SERVER["REQUEST_URI"];
        if ($requestMethod === 'POST') {
            $actionsRoutes = self::filterRouters($routes, 'post');
            foreach ($actionsRoutes as $route) {
                if ($route['uri'] === $path) {
                    $controller = new $route['controller']();
                    $action = $route['actions'];
                    $controller->$action($_POST);
                    return;
                }
            }
        } else {
            $pagesRoutes = self::filterRouters($routes, 'page');
            foreach ($pagesRoutes as $route) {
                if ($route['uri'] === $path) {
                    $controller = new $route['controller']();
                    $controller->getViews($route['views'], $route['params']);
                    return;
                }
            }
            $controller = new PagesController();
            $controller->getViews('404');
        }
    }

}