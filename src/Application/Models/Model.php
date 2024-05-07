<?php

namespace App\Application\Models;

use App\Application\DataBase\ConnectionDataBase;

class Model extends ConnectionDataBase
{

    public function insertToBD(string $tableName, array $params): void
    {
        $fields = [];
        $bin = [];
        foreach ($params as $key => $value) {
            $fields[] = $key;
            $bin[] = ":{$key}";
        }
        $fields = implode(', ', $fields);
        $bin = implode(', ', $bin);

        $query = "INSERT INTO $tableName($fields) VALUES ($bin)";
        $addReport = $this->connect()->prepare($query);
        $addReport->execute($params);
    }


}