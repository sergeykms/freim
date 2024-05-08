<?php

use App\Application\Route\Route;
use App\Controllers\PagesController;

$path =$_SERVER['REQUEST_URI'];

// Перечень роутов для обработки представлений
// uri -> путь из адресной строки
// PagesController::class -> контроллеер для обработки представления
// views -> функция в контроллере дял обработки представления
// params -> массив параметров

Route::page('/', PagesController::class, 'layout', ['page' => 'main']);
Route::page('/home', PagesController::class, 'layout', ['page' => 'home']);
Route::page('/about', PagesController::class, 'layout', ['page' => 'about']);
Route::page('/contacts', PagesController::class, 'layout', ['page' => 'contacts']);
Route::page('/login', PagesController::class, 'layout', ['page' => 'login']);
Route::page('/register', PagesController::class, 'layout', ['page' => 'register']);

