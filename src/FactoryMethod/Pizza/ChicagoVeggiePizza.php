<?php

namespace HFD\FactoryMethod\Pizza;

class ChicagoVeggiePizza extends Pizza
{
    /**
     * @var string $name
     */
    public $name;

    /**
     * @var string $dough
     */
    public $dough;

    /**
     * @var string $sauce
     */
    public $sauce;

    /**
     * @var string $name
     */
    public $toppings;

    public function __construct()
    {
        $this->name = "ベギーピザ(シカゴスタイル)";
        $this->dough = "極厚クラスと生地";
        $this->sauce = "なんちゃらソース";
        $this->toppings = ['フレッシュトマト', 'オリーブ', '九条ネギ'];
    }

    public function cut(): void
    {
        echo "{$this->name}を四角形にカットします\n";
    }
}
