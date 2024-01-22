<?php

namespace Ngodat\Demo\controllers;
require_once 'Student.php';
class Router
{
    public $routes = [];

    public function get($url, $action)
    {
        $this->setRoute($url, $action, "GET");
    }

    public function post($url, $action)
    {
        $this->setRoute($url, $action, "POST");
    }

    public function setRoute($url, $action, $method)
    {
        $this->routes[$url][$method] = $action;
    }

    public function handleRoute($url, $method)
    {
        if (array_key_exists($url, $this->routes) && array_key_exists($method, $this->routes[$url])) {
            $action = $this->routes[$url][$method];
            if (is_callable($action)) {
                $action();
            } else {
                echo '404 Not Found function';
            }
        } else {
            echo '404 Not Found';
        }
    }
}
