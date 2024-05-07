<?php

namespace App\Application\Models;

use App\Application\DataBase\ConnectionDataBase;

class Report extends Model
{
    protected string $email;
    protected string $message;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }


}