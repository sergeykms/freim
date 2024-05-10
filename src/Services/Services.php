<?php

namespace App\Services;

class Services
{

    public static function setCookie($nameCookie, $value): void {
        setcookie($nameCookie, $value, time() + 3600, '/');
    }

    public static function unsetCookie($nameCookie): void {
        setcookie($nameCookie, '', time() - 3600, '/');
    }
}