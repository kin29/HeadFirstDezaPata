<?php

declare(strict_types=1);

namespace HFD\FactoryMethod\Pizza;

abstract class Pizza
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $dough;

    /**
     * @var string
     */
    public $sauce;

    /**
     * @var []
     */
    public $toppings;

    public function prepare(): void
    {
        echo "{$this->name}を準備します\n";
        echo "生地をこねる...\n";
        echo "ソースを追加...\n";
        echo "トッピングを追加...\n";
        foreach ($this->toppings as $topping) {
            echo "- {$topping}\n";
        }
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
