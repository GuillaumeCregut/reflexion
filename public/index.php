<?php

use App\Controller\HomeController;
use App\Model\ItemManager;

include '../vendor/autoload.php';
$controller = new HomeController();
$itemManager = new ItemManager();
echo $controller->index($itemManager);