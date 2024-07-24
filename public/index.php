<?php

use App\Controller\HomeController;
use App\Model\ItemManager;

include '../vendor/autoload.php';
$controller = new HomeController();
$itemManager = new ItemManager();
$reflexion = new ReflectionClass('App\Controller\HomeController');
var_dump($reflexion->getMethods());
$method=$reflexion->getMethod('index');
var_dump($method->getParameters());
$parameters=$method->getParameters();
$parameter0=$parameters[0];
echo $parameter0->getType();
$paramaterClass = $parameter0->getType()->__toString();
$parameterObject = new $paramaterClass;
echo $controller->index($parameterObject);