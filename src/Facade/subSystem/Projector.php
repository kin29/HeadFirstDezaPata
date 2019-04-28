<?php

namespace HFD\Facade\SubSystem;

use HFD\Facade\SubSystem\DvdPlayer as DvdPlayer;

class Projector
{
    public $dvdPlayer;

    public function __construct(DvdPlayer $dvdPlayer)
    {
        $this->dvdPlayer = $dvdPlayer;
    }

    public function on()
    {
        echo "プロジェクターをONにします\n";
    }

    public function off()
    {
        echo "プロジェクターをOFFにします\n";
    }

    public function tvMode()
    {
        echo "プロジェクターをTVモードにします\n";
    }

    public function wideScreenMode()
    {
        echo "プロジェクターをワイドスクリーンモードにします\n";
    }
}
