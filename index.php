<?php
require_once "vendor/autoload.php";
$config = require "Config/controller.php";

use App\Core\Router;

try {
    $router = new Router($config);
    $router->run();
} catch (\Throwable $e) {
    print 'Message '. $e->getMessage();
    print 'File' . $e->getFile();
    print 'Line' . $e->getLine();

}



