<?php

namespace App\Controllers\Public;

class Main extends Controller
{
    public function view()
    {
        $this->data = [
            'test' => 1,
            'test1' => 2,
        ];
        $this->publicView('Main/Main');
    }
        public function create()
    {
        echo "This is the Main page, Create method.";
    }
    public function update()
    {
        echo "This is the Main page, Update method.";
    }
    public function delete()
    {
        echo "This is the Main page, Delete method.";
    }
}