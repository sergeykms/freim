<?php

namespace App\Application\Actions;

class Actions implements ActionInterface
{

    public static function sendForm(array $params): void
    {
        print_r($params);
    }

    public static function login(array $params): void
    {
        print_r($params);
    }
}