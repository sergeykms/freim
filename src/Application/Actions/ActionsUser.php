<?php

namespace App\Application\Actions;

use App\Application\Models\User;

class ActionsUser
{
    public static function loginUser(array $params): void
    {
        $user = new User();
        $findUser = $user->findByField('users', 'email', $params['email']);
        if (!$findUser) {
            echo 'Пользователь не найден';
        } elseif (password_verify($params['password'], $findUser['password'])) {
        header('Location: /home');
        } else {
            echo 'Неверный пароль';
        }
    }

    public static function registerUser(array $params): void
    {
        $user = new User();
        $user->insertToBD('users', $params);
        header('Location: /login');
    }
}