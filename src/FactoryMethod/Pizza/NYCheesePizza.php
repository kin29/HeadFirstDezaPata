<?php

namespace HFD\FactoryMethod\Pizza;

class NYCheesePizza extends Pizza
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
        $this->name = "チーズピザ(ニューヨークスタイル)";
        $this->dough = "薄いクラスト生地";
        $this->sauce = "なんちゃらソース";
        $this->toppings = ['ゴルゴンゾーラチーズ', 'オリーブオイル'];
    }
}
