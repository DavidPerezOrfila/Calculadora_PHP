<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 11/10/16
 * Time: 17:51
 */

chdir(dirname(__DIR__));

require 'application/controllers/IndexController.php';
require 'application/controllers/CalculatorController.php';

if (!isset($_GET['controller']))
{
    $controllerName = 'controllers\\IndexController';
    $action         = 'indexAction';
}
else
{
    $controllerName     = 'controllers\\' . ucfirst($_GET['controller']) . 'Controller';
    $action             = $_GET['action'] . 'Action';
}

$controller = new $controllerName();
return $controller->$action();
