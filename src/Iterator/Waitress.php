<?php

namespace HFD\Iterator;

class Waitress
{
    private $pancakeMenu;
    private $dinnerMenu;

    public function __construct(PancakeMenu $pancakeMenu, DinnerMenu $dinnerMenu)
    {
        $this->pancakeMenu = $pancakeMenu;
        $this->dinnerMenu = $dinnerMenu;
    }

    public function printMenu()
    {
        echo "●パンケーキメニュー\n";
        $pancakeMenus = $this->dinnerMenu->getMenuItems();
        for ($i = 0; $i < count($pancakeMenus); $i++) {
            echo $pancakeMenus[$i]. "\n";
        }

        echo "●ディナーメニュー\n";
        $dinnerMenus = explode('\n', $this->pancakeMenu->getMenuItems());
        for ($i = 0; $i < count($dinnerMenus); $i++) {
            echo $dinnerMenus[$i];
        }
    }
}
