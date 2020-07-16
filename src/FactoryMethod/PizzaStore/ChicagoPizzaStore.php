<?php

declare(strict_types=1);

namespace HFD\FactoryMethod\PizzaStore;

use HFD\FactoryMethod\Pizza\ChicagoCheesePizza;
use HFD\FactoryMethod\Pizza\ChicagoClamPizza;
use HFD\FactoryMethod\Pizza\ChicagoPepperoniPizza;
use HFD\FactoryMethod\Pizza\ChicagoVeggiePizza;
use HFD\FactoryMethod\Pizza\Pizza;

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza(string $type): ?Pizza
    {
        //変化する部分（オブジェクト作成）
        $pizza = null;
        if ($type == 'チーズ') {
            $pizza = new ChicagoCheesePizza();
        } elseif ($type == 'クラム') {
            $pizza = new ChicagoClamPizza();
        } elseif ($type == '野菜') {
            $pizza = new ChicagoVeggiePizza();
        } elseif ($type == 'ペパロニ') {
            $pizza = new ChicagoPepperoniPizza();
        }

        return $pizza;
    }
}
