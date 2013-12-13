<?php

namespace controllers;

use lib\MVC\Controller\BaseController;
use models\Pengguna;

class Home extends BaseController {
    protected function Index() {
        $viewModel = Pengguna::getPengguna();
        $this->RenderView($viewModel);
    }
}
