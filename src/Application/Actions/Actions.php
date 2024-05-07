<?php

namespace App\Application\Actions;

use App\Application\Models\Report;

class Actions implements ActionInterface
{

    public static function sendForm(array $params): void
    {
        $report = new Report();
        $params = [
            'email' => $_POST['email'],
            'message' => $_POST['message'],
        ];
        $report->insertToBD('report', $params);
    }

    public static function login(array $params): void
    {
        print_r($params);
    }
}