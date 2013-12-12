<?php

namespace lib\MVC\Controller;

abstract class BaseController {
    protected $urlParams;
    protected $action;

    public function __construct($action, $urlParams) {
        $this->action = $action;
        $this->urlParams = $urlParams;
    }

    public function ExecuteAction() {
        return $this->{$this->action}();
    }

    protected function RenderView($viewModel, $fullView = true) {
        $classData = explode("\\", get_class($this));
        $className = end($classData);

        $content = __DIR__ . "/../../../views/" . $className . "/" . $this->action . ".php";
        if ($fullView) {
            require __DIR__ . "/../../../views/template.php";
        } else {
            require $content;
        }
    }
} 