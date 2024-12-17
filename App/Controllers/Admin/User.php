<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\User as UserModel;

class User extends Controller
{
    public function create()
    {
        if (!empty($_POST)) {
            $model = new UserModel();
            $model->save(array_intersect_key(array_filter($_POST), $model->toArray()));
        }
        $this->adminView('User/userCreate');
    }

    public function read()
    {
        $this->adminView('User/userRead');
    }

    public function update()
    {
        $model = new UserModel();
        $this->data = ['data' => $model->getOneUser($_GET['id'])];
        if (!empty($_POST)) {
            $model->update(array_intersect_key(array_filter($_POST), $model->toArray()));
        }
        $this->adminView('User/userUpdate');
    }

    public function delete()
    {
        $model = new UserModel();
        $model->delete($_GET['id']);
    }
}