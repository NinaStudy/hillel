<?php
require_once "vendor/autoload.php";
use App\FirstClass;

$obj = new FirstClass();
$obj->setQuantity(2);
var_dump($obj->getPow());
