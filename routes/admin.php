<?php

use App\Controllers\HomeController;
use App\Controllers\UserController;

$router->get('/dashboard', [new HomeController(), 'dashboard']);



$router->get('/users', [new UserController(), 'listUsers']);
$router->get('/users/create', [new UserController(), 'createUser']);
$router->get('/users/delete', [new UserController(), 'deleteUser']);