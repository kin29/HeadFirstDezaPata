<?php

namespace HFD\SimpleFactory\Pizza;

/**
 * Class PepperoniPizza
 *
 * 具象製品。
 * 抽象Pizzaクラスを実装する。
 *
 * @package HFD\SimpleFactory\Pizza
 */
class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "ペペローニピザ";
    }
}
