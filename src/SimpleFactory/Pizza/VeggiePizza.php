<?php

declare(strict_types=1);

namespace HFD\SimpleFactory\Pizza;

/**
 * Class VeggiePizza
 *
 * 具象製品。
 * 抽象Pizzaクラスを実装する。
 */
class VeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'ベギーピザ';
    }
}
