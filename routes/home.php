<?php

use App\Controllers\HomeController;

$router->get('/', [new HomeController(), 'index']);
