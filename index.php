<?php

require_once "vendor/autoload.php";

use App\Application\Router\Route;
use App\Application\Router\Router;
use App\Controllers\PagesController;

$path = $_SERVER["REQUEST_URI"];

Route::page('/home', PagesController::class, 'home');
Route::page('/about', PagesController::class, 'about');


$router = new Router();
$router->route(Route::getRoutes());

