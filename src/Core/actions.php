<?php

use App\Application\Router\Route;
use App\Controllers\ActionsController;

// Перечень роутов для обработки экшенов
// uri -> путь из адресной строки
// ActionsController::class -> контроллеер для обработки экшена
// actions -> функция в контроллере дял обработки экшена
// params -> массив параметров
Route::actions('/sendContacts', ActionsController::class, 'sendForm', ['name' => 'Отправка формы']);
Route::actions('/login', ActionsController::class, 'login', ['name' => 'Авторизация']);

