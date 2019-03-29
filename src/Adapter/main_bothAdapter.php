<?php

require __DIR__ . '/../../vendor/autoload.php';

use HFD\Adapter\Turkey\WildTurkey;
use HFD\Adapter\Dock\MallerDock;
use HFD\Adapter\DockAndTurkeyAdapter;

echo "WildTurkeyをnewします。\n";
$turkey = new WildTurkey();  //Adaptee

echo "まずはそのまま\n";
$turkey->gobble();
$turkey->fly();

echo "DockAndTurkeyAdapterを使う\n";
$dock = new DockAndTurkeyAdapter($turkey);  //Adapter
$dock->quack();
$dock->fly();


echo "MallerDockをnewします。\n";
$dock = new MallerDock();  //Adaptee

echo "まずはそのまま\n";
$dock->quack();
$dock->fly();

echo "DockAndTurkeyAdapterを使う\n";
$turkey = new DockAndTurkeyAdapter($dock);  //Adapter
$turkey->gobble();
$turkey->fly();
