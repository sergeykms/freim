<?php

namespace App\Application\Router;

interface RouteInterface
{
    public static function page(string $uri, string $controller, string $views): void;
    public static function getRoutes(): array;
}