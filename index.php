<?php
require_once "vendor/autoload.php";
$config = require "Config/controller.php";
use App\Core\Router;
$router = new Router($config);
print_r($router->run());



