<?php

namespace App\Application\Actions;

use App\Application\Models\Report;

class Actions
{

    public static function sendForm(array $params): void
    {
        $report = new Report();
        $params = [
            'email' => $params['email'],
            'message' => $params['message'],
        ];
        $report->insertToBD('report', $params);
        header('Location: /contacts');
    }

}