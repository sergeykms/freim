<?php

namespace App\Controllers;

use App\Application\Views\View;

class PagesController
{
    public function getViews($view): void
    {
        $viewFilePath = __DIR__ . "/../Views/" . $view . ".view.php";
        if (file_exists($viewFilePath)) {
            View::renderViews($view);
        }
    }
}