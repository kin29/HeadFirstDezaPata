<?php

require __DIR__ . '/../../vendor/autoload.php';

use HFD\FactoryMethod\PizzaStore\NYPizzaStore;
use HFD\FactoryMethod\PizzaStore\ChicagoPizzaStore;

//ニューヨーク店
$nyStore = new NYPizzaStore();
$nyStore->orderPizza("チーズ");
$nyStore->orderPizza("クラム");

//シカゴ店
$chicagoStore = new ChicagoPizzaStore();
$chicagoStore->orderPizza("チーズ");
$chicagoStore->orderPizza("クラム");
