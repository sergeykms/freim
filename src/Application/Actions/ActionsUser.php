<?php

namespace App\Application\Actions;

use App\Application\Models\User;

class ActionsUser
{
    public static function loginUser(array $params): void
    {
//        $report = new User();
//        $params = [
//            'email' => $_POST['email'],
//            'message' => $_POST['message'],
//        ];
//        $report->insertToBD('users', $params);
//        header('Location: /contacts');
    }

    public static function registerUser(array $params): void
    {
        $user = new User();
//        $params = [
//            'email' => $params['email'],
//            'name' => $params['name'],
//            'password' => $params['name'],
//        ];
        $user->insertToBD('users', $params);
        header('Location: /login');
    }
}