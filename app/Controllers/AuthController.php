<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\User;

class AuthController
{
    public function login()
    {
        return View::render('pages/auth/login', ['title' => "Login Page"], 'main');
    }


    public function register()
    {
        return View::render('pages/auth/register', ['title' => "Register Page"], 'main');
    }


    public function registerStore()
    {

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];


        if ($password !== $confirm_password) {
            // Passwords do not match
            echo "Passwords do not match.";
            return;
        }
        if (!isset($name) || !isset($phone) || !isset($password) || !isset($confirm_password)) {
            echo "All fields are required.";
            return;
        }


        $user = new User();
        $user->name = $name;
        $user->phone = $phone;
        $user->password = $password;


        if ($user->create()) {
            // Registration successful
            echo "User registered successfully.";
            header("Location: /login");
            exit();
        } else {
            // Registration failed
            echo "Failed to register user.";
        }
    }
}
