<?php

declare(strict_types=1);

namespace HFD\AbstractFactory\IngredientFactory;

use HFD\AbstractFactory\Ingredient\Cheese\CheeseInterface;
use HFD\AbstractFactory\Ingredient\Clam\ClamInterface;
use HFD\AbstractFactory\Ingredient\Dough\DoughInterface;
use HFD\AbstractFactory\Ingredient\Sauce\SauceInterface;

interface PizzaIngredientFactory
{
    public function createDough(): DoughInterface;

    public function createSauce(): SauceInterface;

    public function createCheese(): CheeseInterface;

    public function createVeggie(): array;

    public function createClam(): ClamInterface;
}
