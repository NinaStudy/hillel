<?php

namespace App\Core;

final class Router
{
    const CONTROLLER_NAMESPACE = 'App\Controllers\Public\\';
    const CONTROLLER_NAMESPACE_ADMIN = 'App\Controllers\Admin\\';
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
           $this->controllerName = $configArray[1];
           $this->methodName = $configArray[2];
       }
   }
    private function getNamespace(): string
    {
        $namespace = self::CONTROLLER_NAMESPACE;
        if($this->isAdmin()) {
            $namespace = self::CONTROLLER_NAMESPACE_ADMIN;
        }
            return $namespace . ucfirst($this->controllerName);
    }
    private function setControllerName(): void
    {
        $this->controllerName = 'main';
            if (!empty($this->requestUri[2])) {
            $this->controllerName = mb_strtolower($this->requestUri[2], 'UTF-8');
        }
            if($this->isAdmin() && !empty($this->requestUri[3])) {
                $this->controllerName = mb_strtolower($this->requestUri[3], 'UTF-8');
            }
    }
    private function setMethodName(): void
    {
        $this->methodName = 'view';
        if(!empty($this->requestUri[3]) && !$this->isAdmin()) {
            $this->methodName = mb_strtolower($this->requestUri[3], 'UTF-8');
        }
        else if($this->isAdmin() && !empty($this->requestUri[4])) {
            $this->methodName = mb_strtolower($this->requestUri[4], 'UTF-8');
        }
    }
    private function processRequest(): void
    {
        $this->requestUri = [];
        if (isset($_SERVER["REQUEST_URI"])) {
            $this->requestUri = explode("/", $_SERVER["REQUEST_URI"]);
        }

    }
    private function isAdmin(): bool
    {
        if (str_contains($_SERVER["REQUEST_URI"], 'Admin') || str_contains($_SERVER["REQUEST_URI"], 'admin')) {
            return true;
        }
        return false;
    }
}

