<?php

declare(strict_types=1);

namespace HFD\SimpleFactory\Pizza;

/**
 * Interface Pizza
 *
 * SimplePizzaFactoryの製品であるPizzaのスーパークラス
 */
abstract class Pizza
{
    /**
     * @var string
     */
    public $name;

    public function prepare(): void
    {
        echo "{$this->name}を準備します\n";
    }

    public function bake(): void
    {
        echo "{$this->name}を焼きます\n";
    }

    public function cut(): void
    {
        echo "{$this->name}をカットします\n";
    }

    public function box(): void
    {
        echo "{$this->name}を箱に入れます\n";
    }
}
