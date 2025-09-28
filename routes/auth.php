<?php

use App\Controllers\AuthController;

$router->get('/login', [new AuthController(), 'login']);
$router->post('/login', [new AuthController(), 'loginStore']);

$router->get('/register', [new AuthController(), 'register']);
$router->post('/register', [new AuthController(), 'registerStore']);

$router->get('/logout', [new AuthController(), 'logout']);
