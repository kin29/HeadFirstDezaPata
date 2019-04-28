<?php

declare(strict_types=1);

namespace HFD\SimpleFactory\Pizza;

/**
 * Class ClamPizza
 *
 * 具象製品。
 * 抽象Pizzaクラスを実装する。
 */
class ClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'クラムピザ';
    }
}
