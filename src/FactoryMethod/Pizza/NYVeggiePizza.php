<?php

namespace HFD\FactoryMethod\Pizza;

class NYVeggiePizza extends Pizza
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
        $this->name = "ベギーピザ(ニューヨークスタイル)";
        $this->dough = "薄いクラスト生地";
        $this->sauce = "なんちゃらソース";
        $this->toppings = ['トマト', 'オリーブ', 'ピーマン'];
    }
}
