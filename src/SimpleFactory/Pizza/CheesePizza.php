<?php

declare(strict_types=1);

namespace HFD\SimpleFactory\Pizza;

/**
 * Class CheesePizza
 *
 * 具象製品。
 * 抽象Pizzaクラスを実装する。
 */
class CheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'チーズピザ';
    }
}
