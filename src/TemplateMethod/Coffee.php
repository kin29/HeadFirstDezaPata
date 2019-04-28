<?php

declare(strict_types=1);

namespace HFD\TemplateMethod;

class Coffee
{
    public function __toString(): string
    {
        return "--- コーヒーのレシピ ---\n";
    }

    public function prepareRecipe(): void
    {
        $this->boilWater();
        $this->brewCoffeeGrinds();
        $this->pourInCup();
        $this->addSugarAndMilk();
    }

    public function boilWater(): void
    {
        echo "お湯を沸かします\n";
    }

    public function brewCoffeeGrinds(): void
    {
        echo "フィルターでコーヒをドリップします\n";
    }

    public function pourInCup(): void
    {
        echo "カップに注ぎます\n";
    }

    public function addSugarAndMilk(): void
    {
        echo "砂糖とミルクを追加します\n";
    }
}
