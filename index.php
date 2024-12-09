<?php
require_once "vendor/autoload.php";
$config = require "Config/controller.php";

use App\Core\Router;
use App\Orm\Connector;

try {
    $router = new Router($config);
    $router->run();
}catch (\Throwable $e){
    print 'message '.$e->getMessage();
    print 'file '.$e->getFile();
    print 'line '.$e->getLine();
}



