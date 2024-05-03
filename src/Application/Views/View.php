<?php

namespace App\Application\Views;

class View implements ViewInterface
{

    public static function renderViews(string $viewName): void
    {
        $pathToView = __DIR__ . "/../../Views/$viewName.view.php";
        if (file_exists($pathToView)) {
            include $pathToView;
        }
    }
}