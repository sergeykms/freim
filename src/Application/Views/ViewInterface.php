<?php

namespace App\Application\Views;

interface ViewInterface
{
    public static function renderViews(string $viewName): void;
}