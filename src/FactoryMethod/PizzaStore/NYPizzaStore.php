<?php

declare(strict_types=1);

namespace HFD\FactoryMethod\PizzaStore;

use HFD\FactoryMethod\Pizza\NYCheesePizza;
use HFD\FactoryMethod\Pizza\NYClamPizza;
use HFD\FactoryMethod\Pizza\NYPepperoniPizza;
use HFD\FactoryMethod\Pizza\NYVeggiePizza;

class NYPizzaStore extends PizzaStore
{
    public function createPizza(string $type): object
    {
        //変化する部分（オブジェクト作成）
        $pizza = null;
        if ($type == 'チーズ') {
            $pizza = new NYCheesePizza();
        } elseif ($type == 'クラム') {
            $pizza = new NYClamPizza();
        } elseif ($type == '野菜') {
            $pizza = new NYVeggiePizza();
        } elseif ($type == 'ペパロニ') {
            $pizza = new NYPepperoniPizza();
        }

        return $pizza;
    }
}
