<?php

namespace App\Controller;

use App\Model\ItemManager;

class HomeController
{
    public function index(ItemManager $itemManager): string
    {
        $items = $itemManager->selectAll();
        var_dump($items);
        return 'toto';
    }
}