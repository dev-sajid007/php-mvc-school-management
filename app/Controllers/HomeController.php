<?php

namespace App\Controllers;

use App\Core\View;

class HomeController
{
    public function index()
    {
        return View::render('home/index', ['title' => 'Welcome to Our School']);
    }

    public function about()
    {
        echo "<h1>About Our School</h1>";
    }
}
