<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\PostCategory as PostCategoryModel;

class PostCategory extends Controller
{
    public function create()
    {
        if (!empty($_POST)) {
            $model = new PostCategoryModel();
            $model->save(array_intersect_key(array_filter($_POST), $model->toArray()));
        }
        $this->adminView('PostCategory/postCategoryCreate');
    }

    public function read()
    {
        $this->adminView('PostCategory/postCategoryRead');
    }

    public function update()
    {
        $model = new PostCategoryModel();
        $this->data = ['data' => $model->getOnePostCategory($_GET['id'])];
        if (!empty($_POST)) {
            $model->update(array_intersect_key(array_filter($_POST), $model->toArray()));
        }
        $this->adminView('PostCategory/postCategoryRead');
    }

    public function delete()
    {
        $model = new PostCategoryModel();
        $model->delete($_GET['id']);
    }
}