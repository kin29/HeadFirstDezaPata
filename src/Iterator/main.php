<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use HFD\Iterator\DinnerMenu;
use HFD\Iterator\PancakeMenu;
use HFD\Iterator\Waitress;

$pancakeMenu = new PancakeMenu();
$dinnerMenu = new DinnerMenu();
$waitress = new Waitress($pancakeMenu, $dinnerMenu);
$waitress->printMenu();
