<?php

declare(strict_types=1);

namespace HFD\FactoryMethod\Pizza;

class ChicagoClamPizza extends Pizza
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
     * @var string
     */
    public $toppings;

    public function __construct()
    {
        $this->name = 'クラムピザ(シカゴスタイル)';
        $this->dough = '極厚クラスと生地';
        $this->sauce = 'なんちゃらソース';
        $this->toppings = ['フレッシュな貝'];
    }

    public function cut(): void
    {
        echo "{$this->name}を四角形にカットします\n";
    }
}
