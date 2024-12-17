<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\GalleryCategory as GalleryCategoryModel;
use App\Orm\Connector;
use App\Orm\Insert;

class GalleryCategory extends Controller
{
    public function create()
    {
        if (!empty($_POST)) {
            $model = new GalleryCategoryModel();
            $model->save(array_intersect_key(array_filter($_POST), $model->toArray()));
        }
        $this->adminView('GalleryCategory/galleryCategoryCreate');
    }

    public function read()
    {
        $this->adminView('GalleryCategory/galleryCategoryRead');
    }

    public function update()
    {
        $model = new GalleryCategoryModel();
        $this->data = ['data' => $model->getOneGalleryCategory($_GET['id'])];
        $this->adminView('GalleryCategory/galleryCategoryUpdate');
    }

    public function delete()
    {
        $model = new GalleryCategoryModel();
        $model->delete($_GET['id']);
    }
}