<?php

namespace App\Controllers\Public;

use App\Controllers\Controller;


class About extends Controller
{
    public function view()
    {
        $this->data['title'] = 'About Us';
        $this->data['page'] = 'about';
        $this->publicView('About/aboutView');
    }
}
