<?php

namespace App\Controllers\Public;

use App\Controllers\Controller;

class Main extends Controller
{
    public function view()
    {
        $this->data['About'] = 'About';
        $this->data['Gallery'] = 'Gallery';
        $this->publicView('Main/mainView');
    }
}