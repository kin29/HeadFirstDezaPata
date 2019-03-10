<?php

namespace HFD\AbstractFactory\IngredientFactory;

use HFD\AbstractFactory\Ingredient\Dough\DoughInterface;
use HFD\AbstractFactory\Ingredient\Sauce\SauceInterface;
use HFD\AbstractFactory\Ingredient\Cheese\CheeseInterface;
use HFD\AbstractFactory\Ingredient\Clam\ClamInterface;

use HFD\AbstractFactory\Ingredient\Dough\ThinCrustDough;
use HFD\AbstractFactory\Ingredient\Sauce\MarinaraSauce;
use HFD\AbstractFactory\Ingredient\Cheese\ReggianoCheese;
use HFD\AbstractFactory\Ingredient\Veggies\Garlic;
use HFD\AbstractFactory\Ingredient\Veggies\Onion;
use HFD\AbstractFactory\Ingredient\Veggies\Mushroom;
use HFD\AbstractFactory\Ingredient\Veggies\RedPepper;
use HFD\AbstractFactory\Ingredient\Clam\FreshClam;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): DoughInterface
    {
        return new ThinCrustDough();
    }

    public function createSauce(): SauceInterface
    {
        return new MarinaraSauce();
    }

    public function createCheese(): CheeseInterface
    {
        return new ReggianoCheese();
    }

    public function createClam(): ClamInterface
    {
        return new FreshClam();
    }

    public function createVeggie(): array
    {
        $veggies = [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper()
        ];
        return $veggies;
    }
}