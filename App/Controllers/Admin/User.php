<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\User as UserModel;

class User extends Controller
{
    public function create()
    {
        echo "This is the Admin User page, Create method.";
    }

    public function read()
    {
        echo "This is the Admin User page, Read method.";
    }

    public function update()
    {
        $model = new UserModel();
        $this->data = ['data' => $model->getOneUser($_GET['id'])];
        $this->adminView('User/userUpdate');
    }

    public function delete()
    {
        echo "This is the Admin User page, Delete method.";
    }
}