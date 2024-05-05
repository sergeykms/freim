<?php

namespace App\Controllers;

use App\Application\Views\View;

class PagesController
{
    public function getViews($view, $params = []): void
    {
        View::renderViews($view, $params);
    }
}