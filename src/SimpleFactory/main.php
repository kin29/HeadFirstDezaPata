<?php

require __DIR__ . '/../../vendor/autoload.php';

use HFD\SimpleFactory\PizzaStore;
use HFD\SimpleFactory\SimplePizzaFactory;

$pizzaStore = new PizzaStore(new SimplePizzaFactory());
$pizzaStore->orderPizza("チーズ");

$pizzaStore = new PizzaStore(new SimplePizzaFactory());
$pizzaStore->orderPizza("ペパロニ");

$pizzaStore = new PizzaStore(new SimplePizzaFactory());
$pizzaStore->orderPizza("クラム");

$pizzaStore = new PizzaStore(new SimplePizzaFactory());
$pizzaStore->orderPizza("野菜");
