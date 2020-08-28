<?php

namespace HFD\Iterator;

use HFD\Iterator\Aggregate\Menu;
use HFD\Iterator\Iterator\MenuIterator;

class Waitress
{
    private $pancakeMenu;
    private $dinnerMenu;

    public function __construct(Menu $pancakeMenu, Menu $dinnerMenu)
    {
        $this->pancakeMenu = $pancakeMenu;
        $this->dinnerMenu = $dinnerMenu;
    }

    public function printMenu()
    {
        echo "●ディナーメニュー\n";
        $dinnerMenuIterator = $this->dinnerMenu->createIterator();
        $this->printMenuItem($dinnerMenuIterator);

        echo "●パンケーキメニュー\n";
        $pancakeMenuIterator = $this->pancakeMenu->createIterator();
        $this->printMenuItem($pancakeMenuIterator);
    }

    private function printMenuItem(MenuIterator $menuIterator): void
    {
        while ($menuIterator->hasNext()) {
            echo $menuIterator->next(). "\n";
        }
    }
}
