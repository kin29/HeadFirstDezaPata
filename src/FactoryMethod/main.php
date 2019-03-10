<?php

require __DIR__ . '/../../vendor/autoload.php';

use HFD\FactoryMethod\PizzaStore\NYPizzaStore;
use HFD\FactoryMethod\PizzaStore\ChicagoPizzaStore;
use HFD\FactoryMethod\PizzaStore\ChicagoPizzaStore_ManyNewYorker;

//ニューヨーク店
$nyStore = new NYPizzaStore();
$nyStore->orderPizza("チーズ");
$nyStore->orderPizza("クラム");

//シカゴ店
$chicagoStore = new ChicagoPizzaStore();
$chicagoStore->orderPizza("チーズ");
$chicagoStore->orderPizza("クラム");

//ChicagoにあるけどNY出身者が多い地区のピザ屋
$chicagoButNYStore = new ChicagoPizzaStore_ManyNewYorker();
$chicagoButNYStore->orderPizza("チーズ（NY風）");
$chicagoButNYStore->orderPizza("チーズ（Chicago風）");
