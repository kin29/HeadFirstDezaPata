<?php

declare(strict_types=1);

namespace HFD\TemplateMethod;

class Tea
{
    public function __toString(): string
    {
        return "--- 紅茶のレシピ ---\n";
    }

    public function prepareRecipe(): void
    {
        $this->boilWater();
        $this->steepTeaBag();
        $this->addLemon();
        $this->pourInCup();
    }

    public function boilWater(): void
    {
        echo "お湯を沸かします\n";
    }

    public function steepTeaBag(): void
    {
        echo "紅茶を浸します\n";
    }

    public function addLemon(): void
    {
        echo "レモンを追加します\n";
    }

    public function pourInCup(): void
    {
        echo "カップに注ぎます\n";
    }
}
