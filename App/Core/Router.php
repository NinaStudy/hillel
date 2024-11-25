<?php

namespace App\Core;

use App\Controllers\Error404;

final class Router
{
    const CONTROLLER_NAMESPACE = 'App\Controllers\\';
    private string $methodName = '';
    private string $controllerName = '';
    private array $requestUri = [];
    private array $config = [];
    public function __construct($config)
    {
        $this->config = $config;
        $this->processRequest();
        $this->setControllerName();
        $this->setMethodName();
    }
    public function run(): void
    {
        $this->validate();
        $namespace = $this->getNamespace();
        $controllerObj = new $namespace;
        $methodName = $this->methodName;
        $controllerObj->$methodName();
   }
   private function validate(): void
   {
       if (!isset($this->config[$this->controllerName . '/' . $this->methodName])) {
           $this->controllerName = 'Error404';
           $this->methodName = 'index';
       } else {
           $configArray = explode('/', $this->config[$this->controllerName . '/' . $this->methodName]);
           $this->controllerName = $configArray[0];
           $this->methodName = $configArray[1];

       }
   }
    private function getNamespace(): string
    {
            return self::CONTROLLER_NAMESPACE . ucfirst($this->controllerName);
    }
    private function setControllerName(): void
    {
        $this->controllerName = 'main';
            if (!empty($this->requestUri[2])) {
            $this->controllerName = mb_strtolower($this->requestUri[2], 'UTF-8');
        }
    }
    private function setMethodName(): void
    {
        $this->methodName = 'index';
        if(!empty($this->requestUri[3])) {
            $this->methodName = mb_strtolower($this->requestUri[3], 'UTF-8');
        }
    }
    private function processRequest(): void
    {
        $this->requestUri = [];
        if (isset($_SERVER["REQUEST_URI"])) {
            $this->requestUri = explode("/", $_SERVER["REQUEST_URI"]);
        }
    }
}

