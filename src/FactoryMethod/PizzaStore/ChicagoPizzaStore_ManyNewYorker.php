<?php

declare(strict_types=1);

namespace HFD\FactoryMethod\PizzaStore;

use HFD\FactoryMethod\Pizza\ChicagoCheesePizza;
use HFD\FactoryMethod\Pizza\ChicagoVeggiePizza;
use HFD\FactoryMethod\Pizza\NYCheesePizza;
use HFD\FactoryMethod\Pizza\NYVeggiePizza;

class ChicagoPizzaStore_ManyNewYorker extends PizzaStore
{
    public function createPizza(string $type): object
    {
        //変化する部分（オブジェクト作成）
        $pizza = null;
        if ($type == 'チーズ（NY風）') {
            $pizza = new NYCheesePizza();
        } elseif ($type == 'チーズ（Chicago風）') {
            $pizza = new ChicagoCheesePizza();
        } elseif ($type == '野菜(NY風)') {
            $pizza = new NYVeggiePizza();
        } elseif ($type == '野菜(Chicago風)') {
            $pizza = new ChicagoVeggiePizza();
        }

        return $pizza;
    }
}
