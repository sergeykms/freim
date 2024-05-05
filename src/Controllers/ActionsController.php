<?php

namespace App\Controllers;

use App\Application\Actions\Actions;

class ActionsController
{
    public function sendForm($params = ['form' => 'contacts']): void
    {
        Actions::sendForm($params);
    }

    public function login($params = ['form' => 'login']): void
    {
        Actions::login($params);
    }
}