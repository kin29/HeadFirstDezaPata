<?php

require __DIR__ . '/../../vendor/autoload.php';

use HFD\Adapter\Turkey\WildTurkey;
use HFD\Adapter\TurkeyAdapter;

echo "WildTurkeyをnewします。\n";
$turkey = new WildTurkey();  //Adaptee

echo "まずはそのまま\n";
$turkey->gobble();
$turkey->fly();

echo "TurkeyAdapterを使う\n";
$dock = new TurkeyAdapter($turkey);  //Adapter
$dock->quack();
$dock->fly();
