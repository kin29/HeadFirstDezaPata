<?php

namespace HFD\SimpleFactory\Pizza;

/**
 * Class VeggiePizza
 *
 * 具象製品。
 * 抽象Pizzaクラスを実装する。
 *
 * @package HFD\SimpleFactory\Pizza
 */
class VeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "ベギーピザ";
    }
}
