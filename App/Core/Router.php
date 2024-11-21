<?php

namespace App\Core;

use App\Controllers\Error404;

class Router
{
    const CONTROLLER_NAMESPACE = 'App\Controllers\\';
    public function run(): void
    {
        $namespace = $this->getNamespace();
        if (!class_exists($namespace)) {
            $namespace = self::CONTROLLER_NAMESPACE . 'Error404';
        }
        $controller = new $namespace;
        $methodName = $this->getMethodName();
        if (method_exists($controller, $methodName)) {
            $controller->$methodName();
        } else {
            $error = new Error404();
            $error->index();
        }
   }
    private function getNamespace(): string
    {
        $controllerName = $this->prepareControllersName();
        if(is_string($controllerName)) {
            $namespace = $controllerName;
        } else {
            $namespace = $controllerName[2];
        }
        return self::CONTROLLER_NAMESPACE . ucfirst($namespace);
    }
    private function prepareControllersName(): array | string
    {
        $result ='Main';
        if (isset($_SERVER["REQUEST_URI"])) {
            $result = explode("/", $_SERVER["REQUEST_URI"]);
        }
        if (is_array($result) && empty($result[2])) {
            $result = 'Main';
        }
        return $result;
    }
    private function getMethodName(): string
    {
        $methodName = 'index';
        $result = [];
        if(isset($_SERVER["REQUEST_URI"])) {
            $result = explode("/", $_SERVER["REQUEST_URI"]);
        }
        if(is_array($result) && !empty($result[3])) {
            $methodName = $result[3];
        }
        return $methodName;
    }
}

// добавить в каждій класс методі create update and delete
// и реализовать в роутере возможность візова єтиї методов
// путем указания их в урле через / после имени контроллера

