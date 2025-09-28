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


    public function dashboard()
    {
        // Check if user is logged in
        // if (!isset($_SESSION['user_id'])) {
        //     // Redirect to login page if not logged in
        //     header('Location: /login');
        //     exit();
        // }

     

        return View::render('admin/dashboard', ['title' => 'Dashboard'], 'admin-main');
    }
}