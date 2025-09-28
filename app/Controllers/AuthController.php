<?php

namespace App\Controllers;

use App\Core\View;
use App\Helpers\Notification;
use App\Models\User;
use PDO;

class AuthController
{
    public function login()
    {
        if (isset($_SESSION['user_id'])) {
            header("Location: /dashboard");
            exit();
        }
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
            Notification::setFlash('error', 'Passwords do not match.');
            header("Location: /register");
            exit();
        }
        if (!isset($name) || !isset($phone) || !isset($password) || !isset($confirm_password)) {
            Notification::setFlash('error', 'All fields are required.');
            header("Location: /register");
            exit();
        }


        $user = new User();
        $user->name = $name;
        $user->phone = $phone;
        $user->password = $password;


        if ($user->create()) {
            // Registration successful
            Notification::setFlash('success', 'Registration successful. Please log in.');
            header("Location: /login");
            exit();
        } else {
            // Registration failed
            Notification::setFlash('error', 'Failed to register user.');
            header("Location: /register");
            exit();
        }
    }



    public function loginStore()
    {
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        if (!isset($phone) || !isset($password)) {
            Notification::setFlash('error', 'All fields are required.');
            header("Location: /login");
            exit();
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


            if(!$row['status']){
                Notification::setFlash('error', 'Your account is inactive. Please contact support.');
                header("Location: /login");
                exit();
            }
            // Verify password
            if(password_verify($password, $row['password'])){
                // Password is correct, set session data (session already started in index.php)
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_phone'] = $row['phone'];
                
                Notification::setFlash('success', 'Welcome back, ' . $row['name'] . '!');
                // Redirect to home or dashboard
                header("Location: /dashboard");
                exit();
            } else {
                Notification::setFlash('error', 'Invalid password.');
                header("Location: /login");
                exit();
            }
        } else {
            Notification::setFlash('error', 'No user found with that phone number.');
            header("Location: /login");
            exit();
        }



    }


    public function logout()
    {
        // Destroy the session to log out the user
        session_destroy();
        // Redirect to login page
        header("Location: /login");

        Notification::setFlash('success', 'You have been logged out successfully.');
        exit();
    }
}
