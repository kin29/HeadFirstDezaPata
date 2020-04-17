<?php


namespace HFD\Strategy;

/**
 * おとりの鴨
 * Class DecoyDuck
 * @package HFD\Strategy
 */
class DecoyDuck extends Duck
{
    public function quack()
    {
        //オーバーライド
        //何もしない（鳴かない）ようにする
    }

    public function display()
    {
        //おとりの鴨の表示
    }

    public function  fly()
    {
        //オーバーライド
        //何もしない（飛べない）ようにする
    }
}
