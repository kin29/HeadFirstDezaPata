<?php

declare(strict_types=1);

namespace HFD\FactoryMethod\Pizza;

class NYCheesePizza extends Pizza
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
        $this->name = 'チーズピザ(ニューヨークスタイル)';
        $this->dough = '薄いクラスト生地';
        $this->sauce = 'なんちゃらソース';
        $this->toppings = ['ゴルゴンゾーラチーズ', 'オリーブオイル'];
    }
}
