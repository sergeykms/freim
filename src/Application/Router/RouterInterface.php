<?php

namespace App\Application\Router;

interface RouterInterface
{
    public function route(array $routes): void;
}