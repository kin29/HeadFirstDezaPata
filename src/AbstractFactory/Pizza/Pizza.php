<?php

declare(strict_types=1);

namespace HFD\AbstractFactory\Pizza;

use HFD\AbstractFactory\Ingredient\Cheese\CheeseInterface;
use HFD\AbstractFactory\Ingredient\Clam\ClamInterface;
use HFD\AbstractFactory\Ingredient\Dough\DoughInterface;
use HFD\AbstractFactory\Ingredient\Sauce\SauceInterface;
use HFD\AbstractFactory\IngredientFactory\PizzaIngredientFactory;

abstract class Pizza
{
    /**
     * @var PizzaIngredientFactory
     */
    public $ingredientFactory;

    /**
     * @var DoughInterface
     */
    public $dough;

    /**
     * @var SauceInterface
     */
    public $sauce;

    /**
     * @var CheeseInterface
     */
    public $cheese;

    /**
     * @var ClamInterface
     */
    public $clam;
    /**
     * @var string
     */
    protected $name;

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
