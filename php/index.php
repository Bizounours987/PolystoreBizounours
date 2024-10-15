<?php
require 'lib/autoloader.php';
use teachframe\Router;
use teachframe\PDOWrapper;

PDOWrapper::setConfig('config.yaml');

$router = new Router();
$router->loadRoutes('routes.yaml');
$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['QUERY_STRING']);


