<?php


namespace HFD\Strategy\Duck;

/**
 * ゴム製の鴨
 * Class RubberDuck
 * @package HFD\Strategy
 */
class RubberDuck extends Duck
{
    public function quack()
    {
        echo "キューという音を出す\n";
    }

    public function display()
    {
        echo "ゴム製の鴨の表示\n";
    }
}
