<?php

namespace App\Controllers;
use App\Core\View;

class AuthController
{
    public function login()
    {
        return View::render('pages/auth/login',['title' => "Login Page"],'main');
    }


    public function register()
    {
        return View::render('pages/auth/register',['title' => "Register Page"],'main');
    }
}