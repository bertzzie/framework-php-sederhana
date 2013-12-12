<?php

namespace controllers;

use lib\MVC\Controller\BaseController;

class Home extends BaseController {
    protected function Index() {
        $viewModel = "DATA";
        $this->RenderView($viewModel);
    }
}
