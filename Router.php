<?php

class Router {
    private $path;
    private $routes;

    public function __construct(){
        include './routes.php';
        // path from user url, example '/gallery'
        $this->path = $_SERVER['REQUEST_URI'];

        // array from routes.php
        $this->routes = $dataRoutes;
    }
    public function executeController() {
        //get array route from routes.php by path
        $dataController = $this->routes[$this->path];

        $pathController = $dataController['path'];
        $nameController = $dataController['controller'];
        $actionController = $dataController['action'];

        include $pathController;
        // createcontroller object by class
        $Controller = new $nameController();
        // execute controller function by name
        $Controller->$actionController();
    }
}

