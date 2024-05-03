<?php

namespace App\Controllers;

use App\Application\Views\View;

class PagesController
{
    public function home(): void
    {
        View::renderViews('home');
    }

    public function about(): void
    {
        View::renderViews('about');
    }
}