<?php

use App\Application\Route\Route;
use App\Controllers\ActionsController;
use App\Controllers\UserController;

// Перечень роутов для обработки экшенов
// uri -> путь из адресной строки
// Контроллер::class -> контроллеер для обработки экшена
// actions -> функция в контроллере дял обработки экшена
// params -> массив параметров
Route::actions('/sendContacts', ActionsController::class, 'sendForm', []);
Route::actions('/login', UserController::class, 'loginUser', []);
Route::actions('/register', UserController::class, 'registerUser', []);


