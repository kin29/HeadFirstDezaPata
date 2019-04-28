<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use HFD\AbstractFactory\PizzaStore\NYPizzaStore;

//use HFD\AbstractFactory\IngredientFactory\NYPizzaIngredientFactory;

/*
//ただ食材を得る
$nyFactory = new NYPizzaIngredientFactory();
echo $nyFactory->createDough()->getName() . "\n";
echo $nyFactory->createSauce()->getName() . "\n";
echo $nyFactory->createCheese()->getName() . "\n";
echo $nyFactory->createClam()->getName() . "\n";
$veggies = $nyFactory->createVeggie();
foreach ($veggies as $veggie) {
    echo $veggie->getName() . "\n";
}
*/

$nyStore = new NYPizzaStore();
$nyStore->orderPizza('チーズ');
$nyStore->orderPizza('クラム');
