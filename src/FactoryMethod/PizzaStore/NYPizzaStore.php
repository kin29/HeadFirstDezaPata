<?php

namespace HFD\FactoryMethod\PizzaStore;

use HFD\FactoryMethod\Pizza\NYCheesePizza;
use HFD\FactoryMethod\Pizza\NYClamPizza;
use HFD\FactoryMethod\Pizza\NYVeggiePizza;
use HFD\FactoryMethod\Pizza\NYPepperoniPizza;

class NYPizzaStore extends PizzaStore
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
            $pizza = new NYCheesePizza();
        } else if ($type == "クラム") {
            $pizza = new NYClamPizza();
        } else if ($type == "野菜") {
            $pizza = new NYVeggiePizza();
        } else if($type == "ペパロニ"){
            $pizza = new NYPepperoniPizza();
        }

        return $pizza;
    }
}
