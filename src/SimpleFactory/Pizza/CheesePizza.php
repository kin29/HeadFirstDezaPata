<?php

namespace HFD\SimpleFactory\Pizza;

/**
 * Class CheesePizza
 *
 * 具象製品。
 * 抽象Pizzaクラスを実装する。
 *
 * @package HFD\SimpleFactory\Pizza
 */
class CheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "チーズピザ";
    }
}
