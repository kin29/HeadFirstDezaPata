<?php


namespace HFD\Strategy\Behavior;


class Squack implements QuackBehavior
{
    public function quack()
    {
        echo "ゴム製のカモがキューという音を発する\n";
    }
}
