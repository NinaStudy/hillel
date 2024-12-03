<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\PostCategory as PostCategoryModel;

class PostCategory extends Controller
{
    public function create()
    {
        echo "This is the Admin PostCategory page, Create method.";
    }

    public function read()
    {
        echo "This is the Admin PostCategory page, Read method.";
    }

    public function update()
    {
        $model = new PostCategoryModel();
        $this->data = ['data' => $model->getOnePostCategory($_GET['id'])];
        $this->adminView('PostCategory/postCategoryUpdate');
    }

    public function delete()
    {
        echo "This is the Admin PostCategory page, Delete method.";
    }
}