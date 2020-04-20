<?php


namespace HFD\Strategy\Behavior;


class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo "何もしない。鳴けない！\n";
    }
}
