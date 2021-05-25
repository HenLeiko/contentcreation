<?php


namespace app\core;

use app\controllers;

class Route
{
    protected $controllerName = 'Main';
    protected $actionName = 'index';

    public function __construct()
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if ( !empty($routes[1]) )
        {
            $this->setControllerName($routes[1]);
        }

        if ( !empty($routes[2]) )
        {
            $this->setActionName($routes[2]);
        }

    }

    protected function setControllerName($name)
    {
        $this->controllerName = $name;
    }

    protected function getControllerName()
    {
        return $this->controllerName;
    }

    protected function setActionName($name)
    {
        $this->actionName = $name;
    }

    protected function getActionName()
    {
        return $this->actionName;
    }

    protected function getController()
    {
        $this->setControllerName($this->getControllerName().'Controller');
        $controllerFile = ucfirst($this->getControllerName()).'.php';
        $controllerPath = "app/controllers/".$controllerFile;

        if(!file_exists($controllerPath))
        {
            self::errorPage404();
        }

        include "app/controllers/".$controllerFile;
        return ucfirst($this->getControllerName());
    }

    protected function getModel()
    {
        $modelName = ucfirst($this->getControllerName()).'Model';
        $modelFile = $modelName.'.php';
        $modelPath = "app/models/".$modelFile;
        if(file_exists($modelPath))
        {
            include "app/models/" . $modelFile;
            return $modelName;
        }
    }


    public function run()
    {
        $model = $this->getModel();
        if ($model)
        {
            $model = new $model;
        }
        $controller = $this->getController();
        $action = $this->getActionName();
        $controller = new $controller;
        $controller->$action();


    }

    static function errorPage404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
}