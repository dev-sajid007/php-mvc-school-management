<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\User;
use PDO;

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



    public function loginStore()
    {
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        if (!isset($phone) || !isset($password)) {
            echo "All fields are required.";
            return;
        }


        $database = new \App\Config\Database();
        $db = $database->getConnection();

        



        $user = new User();
        
        // Find user by phone
        $query = "SELECT * FROM users WHERE phone = :phone LIMIT 0,1";
        $stmt = $database->conn->prepare($query);
        $stmt->bindParam(":phone", $phone);
        $stmt->execute();
        $num = $stmt->rowCount();   

        if($num > 0){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verify password
            if(password_verify($password, $row['password'])){
                // Password is correct, start a session
                session_start();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_phone'] = $row['phone'];

                // Redirect to home or dashboard
                header("Location: /dashboard");
                exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with that phone number.";
        }



    }
}
