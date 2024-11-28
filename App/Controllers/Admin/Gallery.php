<?php

namespace App\Controllers\Admin;

class Gallery extends Controller
{
    public function view()
    {
      $this->publicView('Gallery/galleryMain');
    }
    public function create()
    {
        echo "This is the Admin Gallery page, Create method.";
    }
    public function update()
    {
        echo "This is the Admin Gallery page, Update method.";
    }
    public function delete()
    {
        echo "This is the Admin Gallery page, Delete method.";
    }
}