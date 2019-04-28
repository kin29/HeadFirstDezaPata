<?php

declare(strict_types=1);

namespace HFD\Facade\SubSystem;

use HFD\Facade\SubSystem\CdPlayer as CdPlayer;
use HFD\Facade\SubSystem\DvdPlayer as DvdPlayer;
use HFD\Facade\SubSystem\Tuner as Tuner;

class Amplifier
{
    /* @var Tuner $tuner */
    public $tuner;

    /* @var DvdPlayer $dvdPlayer */
    public $dvdPlayer;

    /* @var CdPlayer $cdPlayer */
    public $cdPlayer;

    public function __construct()
    {
        $this->tuner = new Tuner($this);
        $this->dvdPlayer = new DvdPlayer($this);
        $this->cdPlayer = new CdPlayer($this);
    }

    public function on(): void
    {
        echo "アンプをONにします\n";
    }

    public function off(): void
    {
        echo "アンプをOFFにします\n";
    }

    public function setCd(): void
    {
        echo "アンプにCDプレーヤをセットします\n";
    }

    public function setDvd($dvd): void
    {
        echo "アンプに{$dvd}をセットします\n";
    }

    public function setStereoSound(): void
    {
        echo "アンプにステレオサウンドをセットします\n";
    }

    public function setSurroundSound(): void
    {
        echo "アンプにサラウンドサウンドをセットします\n";
    }

    public function setTuner(): void
    {
        echo "アンプにチューナーをセットします\n";
    }

    public function setVolume(int $level): void
    {
        echo "アンプにボリュームを{$level}にします\n";
    }
}
