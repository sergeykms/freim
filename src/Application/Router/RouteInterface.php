<?php

namespace App\Application\Router;

interface RouteInterface
{
    public static function page(string $uri, string $controller, string $views, array $params): void;
    public static function actions(string $uri, string $controller, string $actions, array $params): void;


    public static function getRoutes(): array;
}