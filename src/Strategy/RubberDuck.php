<?php


namespace HFD\Strategy;

/**
 * ゴム製の鴨
 * Class RubberDuck
 * @package HFD\Strategy
 */
class RubberDuck extends Duck
{
    public function quack()
    {
        //オーバーライド
        //キューという音を出す
    }

    public function display()
    {
        //ゴム製の鴨の表示
    }

    public function fly()
    {
        //オーバーライド
        //何もしない（飛ばない）ようにする
    }
}
