<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Gallery as GalleryModel;

class Gallery extends Controller
{
    public function create()
    {
        echo "This is the Admin Gallery page, Create method.";
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
        echo "This is the Admin Gallery page, Delete method.";
    }
}