<?php

declare(strict_types=1);

namespace HFD\Facade\SubSystem;

use HFD\Facade\SubSystem\DvdPlayer as DvdPlayer;

class Projector
{
    public $dvdPlayer;

    public function __construct(DvdPlayer $dvdPlayer)
    {
        $this->dvdPlayer = $dvdPlayer;
    }

    public function on(): void
    {
        echo "プロジェクターをONにします\n";
    }

    public function off(): void
    {
        echo "プロジェクターをOFFにします\n";
    }

    public function tvMode(): void
    {
        echo "プロジェクターをTVモードにします\n";
    }

    public function wideScreenMode(): void
    {
        echo "プロジェクターをワイドスクリーンモードにします\n";
    }
}
