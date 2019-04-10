<?php

namespace HFD\Facade\SubSystem;

use HFD\Facade\SubSystem\Tuner as Tuner;
use HFD\Facade\SubSystem\DvdPlayer as DvdPlayer;
use HFD\Facade\SubSystem\CdPlayer as CdPlayer;

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

    public function on()
    {
        echo "アンプをONにします\n";
    }

    public function off()
    {
        echo "アンプをOFFにします\n";
    }

    public function setCd()
    {
        echo "アンプにCDプレーヤをセットします\n";
    }

    public function setDvd($dvd)
    {
        echo "アンプに{$dvd}をセットします\n";
    }

    public function setStereoSound()
    {
        echo "アンプにステレオサウンドをセットします\n";
    }

    public function setSurroundSound()
    {
        echo "アンプにサラウンドサウンドをセットします\n";
    }

    public function setTuner()
    {
        echo "アンプにチューナーをセットします\n";
    }

    public function setVolume(int $level)
    {
        echo "アンプにボリュームを{$level}にします\n";
    }
}
