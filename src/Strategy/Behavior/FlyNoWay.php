<?php


namespace HFD\Strategy\Behavior;


class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo "何もしない。飛べない！\n";
    }
}
