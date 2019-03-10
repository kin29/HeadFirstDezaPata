<?php

namespace HFD\AbstractFactory\Pizza;

use HFD\AbstractFactory\IngredientFactory\PizzaIngredientFactory;
use HFD\AbstractFactory\Ingredient\Cheese\CheeseInterface;
use HFD\AbstractFactory\Ingredient\Clam\ClamInterface;
use HFD\AbstractFactory\Ingredient\Dough\DoughInterface;
use HFD\AbstractFactory\Ingredient\Sauce\SauceInterface;

abstract class Pizza
{
    /**
     * @var $name string
     */
    protected $name;

    /**
     * @var PizzaIngredientFactory $ingredientFactory
     */
    public $ingredientFactory;

    /**
     * @var $dough DoughInterface
     */
    public $dough;

    /**
     * @var $sauce SauceInterface
     */
    public $sauce;

    /**
     * @var $cheese CheeseInterface
     */
    public $cheese;

    /**
     * @var $clam ClamInterface
     */
    public $clam;

    abstract public function prepare(): void;

    public function bake(): void
    {
        echo "{$this->name}を焼きます\n";
    }

    public function cut(): void
    {
        echo "{$this->name}をカットします\n";
    }

    public function box(): void
    {
        echo "{$this->name}を箱に入れます\n";
    }

}
