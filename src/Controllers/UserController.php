<?php

namespace App\Controllers;

use App\Application\Actions\ActionsUser;

class UserController
{
    public function registerUser($params = []): void
    {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        ActionsUser::registerUser(['email' => $email, 'name' => $name, 'password' => $password]);
    }

    public function loginUser($params = []): void
    {
        $email = $_POST['email'];
        $message = $_POST['message'];
        Actions::sendForm(['email' => $email, 'message' => $message]);
    }

}