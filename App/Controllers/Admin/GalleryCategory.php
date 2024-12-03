<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\GalleryCategory as GalleryCategoryModel;

class GalleryCategory extends Controller
{
    public function create()
    {
        echo "This is the Admin GalleryCategory page, Create method.";
    }

    public function read()
    {
        echo "This is the Admin GalleryCategory page, Read method.";
    }

    public function update()
    {
        $model = new GalleryCategoryModel();
        $this->data = ['data' => $model->getOneGalleryCategory($_GET['id'])];
        $this->adminView('GalleryCategory/galleryCategoryUpdate');
    }

    public function delete()
    {
        echo "This is the Admin GalleryCategory page, Delete method.";
    }
}