<?php

namespace App\Application\DataBase;

interface ConnectionDataBaseInterface
{
    public function connect(): \PDO;
}