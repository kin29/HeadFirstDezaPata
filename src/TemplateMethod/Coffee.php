<?php

declare(strict_types=1);

namespace HFD\TemplateMethod;

class Coffee extends CaffeineBeverage
{
    public function __toString(): string
    {
        return "--- コーヒーのレシピ ---\n";
    }

    public function brew(): void
    {
        echo "フィルターでコーヒをドリップします\n";
    }

    public function addCondiments(): void
    {
        echo "砂糖とミルクを追加します\n";
    }
}
