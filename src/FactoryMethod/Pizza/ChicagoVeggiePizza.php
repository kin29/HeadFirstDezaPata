<?php

declare(strict_types=1);

namespace HFD\FactoryMethod\Pizza;

class ChicagoVeggiePizza extends Pizza
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
        $this->name = 'ベギーピザ(シカゴスタイル)';
        $this->dough = '極厚クラスと生地';
        $this->sauce = 'なんちゃらソース';
        $this->toppings = ['フレッシュトマト', 'オリーブ', '九条ネギ'];
    }

    public function cut(): void
    {
        echo "{$this->name}を四角形にカットします\n";
    }
}
