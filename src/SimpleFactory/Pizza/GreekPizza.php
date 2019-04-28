<?php

declare(strict_types=1);

namespace HFD\SimpleFactory\Pizza;

class GreekPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'ギリシャピザ';
    }
}
