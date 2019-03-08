<?php

namespace HFD\SimpleFactory\Pizza;

/**
 * Class ClamPizza
 *
 * 具象製品。
 * 抽象Pizzaクラスを実装する。
 *
 * @package HFD\SimpleFactory\Pizza
 */
class ClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "クラムピザ";
    }
}
