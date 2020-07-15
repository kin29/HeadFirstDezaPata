<?php

declare(strict_types=1);

namespace HFD\FactoryMethod\Pizza;

class ChicagoCheesePizza extends Pizza
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

    public function __construct()
    {
        $this->name = 'チーズピザ(シカゴスタイル)';
        $this->dough = '極厚クラスと生地';
        $this->sauce = 'プラムトマトソース';
        $this->toppings = ['モツァレラチーズ', 'はちみつ'];
    }

    public function cut(): void
    {
        echo "{$this->name}を四角形にカットします\n";
    }
}
