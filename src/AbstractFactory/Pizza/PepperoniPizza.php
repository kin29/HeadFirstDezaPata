<?php

declare(strict_types=1);

namespace HFD\AbstractFactory\Pizza;

use HFD\AbstractFactory\IngredientFactory\PizzaIngredientFactory;

class PepperoniPizza extends Pizza
{
    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->name = 'ペペローニピザ';
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare(): void
    {
        echo "{$this->name}を準備します。\n";
        $this->dough = $this->ingredientFactory->createDough();
        echo "{$this->dough->getName()}を作りました。\n";
        $this->sauce = $this->ingredientFactory->createSauce();
        echo "{$this->sauce->getName()}を作りました。\n";
        $this->cheese = $this->ingredientFactory->createCheese();
        echo "{$this->cheese->getName()}を作りました。\n";
    }
}
