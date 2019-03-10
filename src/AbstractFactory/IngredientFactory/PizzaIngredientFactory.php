<?php

namespace HFD\AbstractFactory\IngredientFactory;

use HFD\AbstractFactory\Ingredient\Dough\DoughInterface;
use HFD\AbstractFactory\Ingredient\Sauce\SauceInterface;
use HFD\AbstractFactory\Ingredient\Cheese\CheeseInterface;
use HFD\AbstractFactory\Ingredient\Clam\ClamInterface;

interface PizzaIngredientFactory
{
    public function createDough(): DoughInterface;
    public function createSauce(): SauceInterface;
    public function createCheese(): CheeseInterface;
    public function createVeggie(): array;
    public function createClam(): ClamInterface;
}
