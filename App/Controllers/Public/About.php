<?php

namespace App\Controllers\Public;

class About extends Controller
{
    public function view()
    {
        echo "This is the About page.";
        var_dump('123');
    }
    public function create()
    {
        echo "This is the About page, Create method.";
    }
    public function update()
    {
        echo "This is the About page, Update method.";
    }
    public function delete()
    {
        echo "This is the About page, Delete method.";
    }
}
