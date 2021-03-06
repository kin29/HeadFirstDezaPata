<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use HFD\SimpleFactory\PizzaStore;
use HFD\SimpleFactory\SimplePizzaFactory;

$pizzaStore = new PizzaStore(new SimplePizzaFactory());
$pizzaStore->orderPizza('チーズ');
$pizzaStore->delivery();

$pizzaStore = new PizzaStore(new SimplePizzaFactory());
$pizzaStore->orderPizza('ギリシャ');

$pizzaStore = new PizzaStore(new SimplePizzaFactory());
$pizzaStore->orderPizza('クラム');

$pizzaStore = new PizzaStore(new SimplePizzaFactory());
$pizzaStore->orderPizza('野菜');
