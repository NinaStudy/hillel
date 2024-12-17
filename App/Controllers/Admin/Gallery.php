<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Gallery as GalleryModel;

class Gallery extends Controller
{
    public function create()
    {
        if (!empty($_POST)) {
            $model = new GalleryModel();
            $model->save(array_intersect_key(array_filter($_POST), $model->toArray()));
        }
        $this->adminView('Gallery/Admin/galleryCreate');
    }

    public function read()
    {
        $model = new GalleryModel();
        $this->data = ['data' => $model->getAllGallery()];
        $this->adminView('Gallery/Admin/galleryRead');
    }

    public function update()
    {

        $model = new GalleryModel();
        $this->data = ['data' => $model->getOneGallery($_GET['id'])];
        $this->adminView('Gallery/Admin/galleryUpdate');
    }

    public function delete()
    {
        $model = new GalleryModel();
        $model->delete($_GET['id']);
    }
}