<?php

namespace lib\MVC;

class Router {
    private $controller;
    private $action;
    private $urlParams;

    private $Controller_Namespace = "\\controllers\\";
    private $Base_Controller_Name = "lib\\MVC\\Controller\\BaseController";

    public function __construct($urlParams) {
        $this->urlParams = $urlParams;

        if (empty($this->urlParams["controller"])) {
            $this->controller = $this->Controller_Namespace . "Home";
        } else {
            $this->controller = $this->Controller_Namespace . $this->urlParams["controller"];
        }

        if (empty($this->urlParams["action"])) {
            $this->action = "index";
        } else {
            $this->action = $this->urlParams["action"];
        }
    }

    public function getController() {
        if (class_exists($this->controller)) {
            $parent = class_parents($this->controller);

            if (in_array($this->Base_Controller_Name, $parent)) {
                if (method_exists($this->controller, $this->action)) {
                    return new $this->controller($this->action, $this->urlParams);
                } else {
                    throw new \Exception("Action not found!");
                }
            } else {
                throw new \Exception("Wrong class for controller. Not derived from BaseController.");
            }
        } else {
            throw new \Exception("Controller not found!");
        }
    }
} 
