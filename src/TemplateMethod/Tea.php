<?php

declare(strict_types=1);

namespace HFD\TemplateMethod;

class Tea extends CaffeineBeverage
{
    public function __toString(): string
    {
        return "--- 紅茶のレシピ ---\n";
    }

    public function brew(): void
    {
        echo "紅茶を浸します\n";
    }

    public function addCondiments(): void
    {
        echo "レモンを追加します\n";
    }
}
