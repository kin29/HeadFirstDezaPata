<?php

namespace HFD\FactoryMethod\PizzaStore;

use HFD\FactoryMethod\Pizza\NYCheesePizza;
use HFD\FactoryMethod\Pizza\ChicagoCheesePizza;
use HFD\FactoryMethod\Pizza\NYVeggiePizza;
use HFD\FactoryMethod\Pizza\ChicagoVeggiePizza;


class ChicagoPizzaStore_ManyNewYorker extends PizzaStore
{
    /**
     * @param string $type
     * @return object
     */
    public function createPizza(string $type): object
    {
        //変化する部分（オブジェクト作成）
        $pizza = null;
        if ($type == "チーズ（NY風）") {
            $pizza = new NYCheesePizza();
        } else if ($type == "チーズ（Chicago風）") {
            $pizza = new ChicagoCheesePizza();
        } else if ($type == "野菜(NY風)") {
            $pizza = new NYVeggiePizza();
        } else if ($type == "野菜(Chicago風)") {
            $pizza = new ChicagoVeggiePizza();
        }

        return $pizza;
    }
}
