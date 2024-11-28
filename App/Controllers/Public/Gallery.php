<?php

namespace App\Controllers\Public;

class Gallery extends Controller
{
    public function view()
    {
      $this->publicView('Gallery/galleryMain');
    }
    public function create()
    {
        echo "This is the Gallery page, Create method.";
    }
    public function update()
    {
        echo "This is the Gallery page, Update method.";
    }
    public function delete()
    {
        echo "This is the Gallery page, Delete method.";
    }
}