<?php

namespace App\Controllers;

use App\Application\Views\View;
use App\Services\Services;

class PagesController
{
    public function getViews($view, $params = []): void
    {
       // Если пользователь авторизован - запрет перехода на страницы /login и /register
        if (($params['page'] === 'login' || $params['page'] === 'register') && $params['auth'] === true) {
            Services::goTo('home');
        } else {
            View::renderViews($view, $params);
        }
    }
}