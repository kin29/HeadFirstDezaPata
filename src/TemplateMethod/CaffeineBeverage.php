<?php

declare(strict_types=1);

namespace HFD\TemplateMethod;

abstract class CaffeineBeverage
{
    public function prepareRecipe(): void
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }
    }

    abstract public function brew(): void;

    abstract public function addCondiments(): void;

    public function boilWater(): void
    {
        echo "お湯を沸かします\n";
    }

    public function pourInCup(): void
    {
        echo "カップに注ぎます\n";
    }

    //フック
    public function customerWantsCondiments(): bool
    {
        return true;
    }
}
