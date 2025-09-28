<?php

// Start session for flash messages and user authentication
session_start();

require_once 'autoload.php';

use App\Controllers\AuthController;
use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\StudentController;

$router = new Router();


$router->get('/', [new HomeController(), 'index']);

//auth routes

$router->get('/login', [new AuthController(), 'login']);
$router->post('/login', [new AuthController(), 'loginStore']);

$router->get('/register', [new AuthController(), 'register']);
$router->post('/register', [new AuthController(), 'registerStore']);

$router->get('/logout', [new AuthController(), 'logout']);



//dasboard route
$router->get('/dashboard', [new HomeController(), 'dashboard']);



$router->get('/about', [new HomeController(), 'about']);
$router->get('/students', [new StudentController(), 'list']);




$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
