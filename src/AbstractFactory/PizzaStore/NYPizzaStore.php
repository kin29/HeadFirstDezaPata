<?php

declare(strict_types=1);

namespace HFD\AbstractFactory\PizzaStore;

use HFD\AbstractFactory\IngredientFactory\NYPizzaIngredientFactory;
use HFD\AbstractFactory\Pizza\CheesePizza;
use HFD\AbstractFactory\Pizza\ClamPizza;
use HFD\AbstractFactory\Pizza\PepperoniPizza;
use HFD\AbstractFactory\Pizza\Pizza;
use HFD\AbstractFactory\Pizza\VeggiePizza;

class NYPizzaStore extends PizzaStore
{
    /**
     * @return Pizza|null $pizza
     */
    public function createPizza(string $item): ?Pizza
    {
        $pizza = null;
        $ingredientFactory = new NYPizzaIngredientFactory();

        switch ($item) {
            case 'チーズ':
                $pizza = new CheesePizza($ingredientFactory);

                break;

            case 'クラム':
                $pizza = new ClamPizza($ingredientFactory);

                break;

            case '野菜':
                $pizza = new VeggiePizza($ingredientFactory);

                break;

            case 'ペペロニ':
                $pizza = new PepperoniPizza($ingredientFactory);

                break;

            default:
                break;
        }

        return $pizza;
    }
}
