<?php

namespace HFD\Iterator\Aggregate;

use HFD\Iterator\Iterator\DinnerMenuIterator;
use HFD\Iterator\Iterator\MenuIterator;
use HFD\Iterator\MenuItem;

class DinnerMenu implements Menu
{
    /** @var MenuItem[] */
    private $menuItems;
    private $numberOfItems = 0;

    public function __construct()
    {
        $this->menuItems = [];
        $this->addItem('ベジタリアンBLT', 'レタス、トマト、(偽)ベーコンをはさんだ全粒小麦パンサンドイッチ', true, 2.99);
        $this->addItem('BLT', 'レタス、トマト、ベーコンをはさんだ全粒小麦パンサンドイッチ', false, 2.99);
        $this->addItem('本日のスープ', 'ポテトサラダを添えた本日のスープ', false, 3.29);
        $this->addItem('ホットドッグ', 'ザワークラウト、レリッシュ、玉ねぎ、チーズをはさんだホットドック', false, 3.05);
    }

    public function addItem(string $name, string $description, bool $vegetarian, float $price): void
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        $this->menuItems[$this->numberOfItems] = $menuItem;
        $this->numberOfItems++;
    }

    public function createIterator(): MenuIterator
    {
        return new DinnerMenuIterator($this->menuItems);
    }
}
