<?php

require_once __DIR__ . "/AutoLoader.php";

use lib\MVC\Router;
use lib\MVC\Controller;

$kernel = new Router($_GET);
$controller = $kernel->getController();
$controller->ExecuteAction();
