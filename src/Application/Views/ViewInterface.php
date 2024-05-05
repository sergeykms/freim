<?php

namespace App\Application\Views;

interface ViewInterface
{
    public static function renderViews(string $viewName, array $params): void;
    public static function renderComponents(string $componentsName, array $params): void;

}