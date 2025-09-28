<?php


namespace App\Controllers;

use App\Core\View;
use App\Helpers\Notification;
use App\Models\User;

class UserController
{
    public function listUsers()
    {

        $users = new User();
        $users = $users->getAll();
        $data = [
            'title' => 'User List',
            'users' => $users,
        ];
        return View::render('admin/users/index', $data, 'admin-main');
    }



    public function createUser()
    {
        $data = [
            'title' => 'Create User',
        ];
        return View::render('admin/users/create', $data, 'admin-main');
    }



    public function deleteUser()
    {

        $id = $_GET['id'];

        $user = new User();


        if ($user->delete($id)) {

            //notification
            Notification::setFlash('success', 'User Delete Successfully!');
            header("Location: /users");
            exit();
        } else {
            //notification
            Notification::setFlash('error', 'User Delete Failed!');
            header("Location: /users");
            exit();
        }
    }
}
