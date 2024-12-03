<?php

namespace App\Controllers\Public;

use App\Controllers\Controller;
use App\Models\Gallery as GalleryModel;

class Gallery extends Controller
{
    public function view()
    {
        $model = new GalleryModel();
        $this->data = ['data' => $model->getAllGallery()];
        $this->publicView('Gallery/Public/galleryMain');
    }
}