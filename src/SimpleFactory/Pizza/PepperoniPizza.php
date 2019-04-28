<?php

declare(strict_types=1);

namespace HFD\SimpleFactory\Pizza;

/**
 * Class PepperoniPizza
 *
 * 具象製品。
 * 抽象Pizzaクラスを実装する。
 */
class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'ペペローニピザ';
    }
}
