<?php

namespace HFD\FactoryMethod\Pizza;

class ChicagoClamPizza extends Pizza
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
        $this->name = "クラムピザ(シカゴスタイル)";
        $this->dough = "極厚クラスと生地";
        $this->sauce = "なんちゃらソース";
        $this->toppings = ['フレッシュな貝'];
    }
}
