<?php

declare(strict_types=1);

namespace HFD\Facade\SubSystem;

use HFD\Facade\SubSystem\Amplifier as Amplifier;

class CdPlayer
{
    public $amp;

    public function __construct(Amplifier $amp)
    {
        $this->amp = $amp;
    }

    public function on(): void
    {
        echo "CDプレーヤーをONにします\n";
    }

    public function off(): void
    {
        echo "CDプレーヤーをOFFにします\n";
    }

    public function eject(): void
    {
        echo "CDを取り除きます\n";
    }

    public function pause(): void
    {
        echo "CDを一時停止します\n";
    }

    public function play(): void
    {
        echo "CDをスタートします\n";
    }

    public function stop(): void
    {
        echo "CDをストップします\n";
    }
}
