<?php

require_once __DIR__ . "/AutoLoader.php";

use lib\MVC\Router;

$kernel = new Router($_GET);
$controller = $kernel->getController();
