<?php

use App\Application\Router\Route;
use App\Controllers\PagesController;

$path =$_SERVER['REQUEST_URI'];

Route::page('/', PagesController::class, 'home');
Route::page('/home', PagesController::class, 'home');
Route::page('/about', PagesController::class, 'about');