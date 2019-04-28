<?php

declare(strict_types=1);

namespace HFD\FactoryMethod\Pizza;

class NYVeggiePizza extends Pizza
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
        $this->name = 'ベギーピザ(ニューヨークスタイル)';
        $this->dough = '薄いクラスト生地';
        $this->sauce = 'なんちゃらソース';
        $this->toppings = ['トマト', 'オリーブ', 'ピーマン'];
    }
}
