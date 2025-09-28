<?php

// Start session for flash messages and user authentication
session_start();

require_once 'autoload.php';

use App\Controllers\AuthController;
use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\StudentController;

$router = new Router();

//home routes
include 'routes/home.php';


//auth routes
include 'routes/auth.php';


//dasboard route
include 'routes/admin.php';








$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
