<?php

namespace App\Application\Actions;

use App\Application\Models\User;
use Firebase\JWT\JWT;
use App\Services\Services;

class ActionsUser
{
    public static function loginUser(array $params): void
    {
        $user = new User();
        $findUser = $user->findByField('users', 'email', $params['email']);
        if (!$findUser) {
            echo 'Пользователь не найден';
        } elseif (password_verify($params['password'], $findUser['password'])) {
            $key = $_ENV['SECRET_KEY_JWT'];
            $token = JWT::encode(
                array(
                    'iat' => time(),
                    'nbf' => time(),
                    'exp' => time() + 3600,
                    'data' => array(
                        'user_id' => $findUser['id'],
                        'user_name' => $findUser['name'],
                    )
                ),
                $key,
                'HS256'
            );
            Services::setCookie('jwt', $token);
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