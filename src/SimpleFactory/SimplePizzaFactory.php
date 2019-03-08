<?php

namespace HFD\SimpleFactory;

use HFD\SimpleFactory\Pizza\CheesePizza;
use HFD\SimpleFactory\Pizza\PepperoniPizza;
use HFD\SimpleFactory\Pizza\ClamPizza;
use HFD\SimpleFactory\Pizza\VeggiePizza;

/**
 * Class SimplePizzaFactory
 *
 * ピザをの作成方法だけを扱うクラス
 * 具象Pizzaクラスを参照する唯一の部分
 *
 * @package HFD
 */
class SimplePizzaFactory
{
    /**
     * @param string $type
     * @return object $pizza
     */
    function createPizza(string $type): object
    {
        //変化する部分（オブジェクト作成）
        $pizza = null;
        if ($type == "チーズ") {
            $pizza = new CheesePizza();
        } else if ($type == "ペパロニ") {
            $pizza = new PepperoniPizza();
        } else if ($type == "クラム") {
            $pizza = new ClamPizza();
        } else if ($type == "野菜") {
            $pizza = new VeggiePizza();
        }

        return $pizza;
    }
}
