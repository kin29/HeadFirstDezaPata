<?php


namespace HFD\Strategy\Behavior;


class Quack implements QuackBehavior
{
    public function quack()
    {
        echo "鴨の鳴く振る舞いを実装\n";
    }
}
