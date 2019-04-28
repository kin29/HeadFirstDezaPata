<?php

namespace HFD\Facade\SubSystem;

use HFD\Facade\SubSystem\Amplifier as Amplifier;

class CdPlayer
{
    public $amp;

    public function __construct(Amplifier $amp)
    {
        $this->amp = $amp;
    }

    public function on()
    {
        echo "CDプレーヤーをONにします\n";
    }

    public function off()
    {
        echo "CDプレーヤーをOFFにします\n";
    }

    public function eject()
    {
        echo "CDを取り除きます\n";
    }

    public function pause()
    {
        echo "CDを一時停止します\n";
    }

    public function play()
    {
        echo "CDをスタートします\n";
    }

    public function stop()
    {
        echo "CDをストップします\n";
    }

}
