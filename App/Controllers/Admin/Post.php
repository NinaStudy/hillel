<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Post as PostModel;
use App\Orm\Connector;
use App\Orm\Insert;

class Post extends Controller
{
    public function create()
    {
        if (!empty($_POST)) {
            $model = new PostModel();
            $model->save(array_intersect_key(array_filter($_POST), $model->toArray()));
        }
        $this->adminView('Post/postCreate');
    }

    public function read()
    {
        $this->adminView('Post/postRead');
    }

    public function update()
    {
        $model = new PostModel();
        $this->data = ['data' => $model->getOnePost($_GET['id'])];
        if (!empty($_POST)) {
            $model->update(array_intersect_key(array_filter($_POST), $model->toArray()));
        }
        $this->adminView('Post/postUpdate');
    }

    public function delete()
    {
        $model = new PostModel();
        $model->delete($_GET['id']);
    }
}