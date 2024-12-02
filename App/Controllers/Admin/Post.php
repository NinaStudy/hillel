<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Post as PostModel;

class Post extends Controller
{
    public function create()
    {
        echo "This is the Admin Post page, Create method.";
    }

    public function read()
    {
        echo "This is the Admin Post page, Read method.";
    }

    public function update()
    {
        $model = new PostModel();
        $this->data = ['data' => $model->getOnePost($_GET['id'])];
        $this->adminView('Post/postUpdate');
    }

    public function delete()
    {
        echo "This is the Admin Post page, Delete method.";
    }
}