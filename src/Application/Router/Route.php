<?php

namespace App\Application\Router;
class Route implements RouteInterface
{
private static array $routs;
    public static function page(string $uri, string $controller, string $method): void
    {
        self::$routs[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public static function getRoutes(): array
    {
        return self::$routs;
    }
}