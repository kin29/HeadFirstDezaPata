<?php

namespace HFD\Iterator\Aggregate;

use HFD\Iterator\Iterator\MenuIterator;
use HFD\Iterator\Iterator\PancakeMenuIterator;
use HFD\Iterator\MenuItem;

class PancakeMenu implements Menu
{
    /** @var string */
    private $menuItems;

    public function __construct()
    {
        $this->menuItems = '';
        $this->addItem('K&Bのパンケーキ朝食', 'スクランブルエッグとトースト付いたパンケーキ', true, 2.99);
        $this->addItem('通常のパンケーキ朝食', '卵焼きとソーセージ付いたパンケーキ', false, 2.99);
        $this->addItem('ブルーベリーパンケーキ', '新鮮なブルーベリーで作ったパンケーキ', true, 3.45);
        $this->addItem('ワッフル', 'ブルーベリーか苺が好きな方を載せたワッフル', true, 3.59);
    }

    public function addItem(string $name, string $description, bool $vegetarian, float $price): void
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        $this->menuItems .= "$menuItem\n";
    }

    public function createIterator(): MenuIterator
    {
        return new PancakeMenuIterator($this->menuItems);
    }
}
