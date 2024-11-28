<?php

namespace App\Controllers\Public;

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
}