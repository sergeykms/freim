<?php

namespace App\Application\Router;
class Route implements RouteInterface
{
private static array $routs;
    public static function page(string $uri, string $controller, string $views): void
    {
        self::$routs[] = [
            'uri' => $uri,
            'controller' => $controller,
            'views' => $views
        ];
    }

    public static function getRoutes(): array
    {
        return self::$routs;
    }
}