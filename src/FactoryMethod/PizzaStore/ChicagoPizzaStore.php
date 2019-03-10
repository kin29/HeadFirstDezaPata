<?php

namespace HFD\FactoryMethod\PizzaStore;

use HFD\FactoryMethod\Pizza\ChicagoCheesePizza;
use HFD\FactoryMethod\Pizza\ChicagoClamPizza;
use HFD\FactoryMethod\Pizza\ChicagoVeggiePizza;
use HFD\FactoryMethod\Pizza\ChicagoPepperoniPizza;

class ChicagoPizzaStore extends PizzaStore
{
    /**
     * @param string $type
     * @return object
     */
    public function createPizza(string $type): object
    {
        //変化する部分（オブジェクト作成）
        $pizza = null;
        if ($type == "チーズ") {
            $pizza = new ChicagoCheesePizza();
        } else if ($type == "クラム") {
            $pizza = new ChicagoClamPizza();
        } else if ($type == "野菜") {
            $pizza = new ChicagoVeggiePizza();
        } else if($type == "ペパロニ"){
            $pizza = new ChicagoPepperoniPizza();
        }

        return $pizza;
    }
}
