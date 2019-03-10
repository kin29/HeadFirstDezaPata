<?php

namespace HFD\FactoryMethod\Pizza;

abstract class Pizza
{
    /**
     * @var $name string
     */
    public $name;

    /**
     * @var $dough string
     */
    public $dough;

    /**
     * @var $sauce string
     */
    public $sauce;

    /**
     * @var $toppings []
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
