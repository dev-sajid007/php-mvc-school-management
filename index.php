<?php

// Start session for flash messages and user authentication
session_start();

require __DIR__ . '/vendor/autoload.php';

// Temporary manual include until autoloader is fixed
require_once __DIR__ . '/app/Core/Router.php';

use App\Core\Router;





$router = new Router();

//home routes
include 'routes/home.php';


//auth routes
include 'routes/auth.php';


//dasboard route
include 'routes/admin.php';








$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
