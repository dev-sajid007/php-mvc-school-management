<?php

require_once 'autoload.php';

use App\Controllers\AuthController;
use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\StudentController;

$router = new Router();


$router->get('/', [new HomeController(), 'index']);
$router->get('/login', [new AuthController(), 'login']);

$router->get('/register', [new AuthController(), 'register']);
$router->post('/register', [new AuthController(), 'registerStore']);



$router->get('/about', [new HomeController(), 'about']);
$router->get('/students', [new StudentController(), 'list']);




$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
