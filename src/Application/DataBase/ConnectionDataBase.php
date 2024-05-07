<?php

namespace App\Application\DataBase;


use AllowDynamicProperties;
use PDO;

class ConnectionDataBase implements ConnectionDataBaseInterface
{
    private string $driver;
    private string $host;
    private string $port;
    private string $database;
    private string $password;
    private string $userDB;

    public function __construct()
    {
        $this->driver = 'mysql';
        $this->host = 'localhost';
        $this->port = '3306';
        $this->database = 'freim';
        $this->userDB = 'root';
        $this->password = 'root';
    }

    public function connect(): PDO
    {
        return new PDO("{$this->driver}:host={$this->host};dbname={$this->database};port={$this->port}", $this->userDB, $this->password);
    }
}