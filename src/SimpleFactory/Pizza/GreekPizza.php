<?php

namespace HFD\SimpleFactory\Pizza;

class GreekPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "ギリシャピザ";
    }
}