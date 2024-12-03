<?php

namespace App\Controllers;

use App\Core\Viewer;

class  Controller
{
    protected array $data = [];

    public function publicView(string $partName = 'Main')
    {
        $view = new Viewer();
        $view->setData($this->data);
        $view->includePublicTemplate($partName);
    }

    public function adminView(string $partName = 'Gallery')
    {
        $view = new Viewer();
        $view->setData($this->data);
        $view->includeAdminTemplate($partName);
    }
}