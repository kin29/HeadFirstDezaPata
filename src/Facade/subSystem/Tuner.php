<?php

namespace HFD\Facade\SubSystem;

use HFD\Facade\SubSystem\Amplifier as Amplifier;

class Tuner
{
    public $amp;

    public function __construct(Amplifier $amp)
    {
        $this->amp = $amp;
    }

    public function on()
    {
        echo "チューナーをONにします\n";
    }

    public function off()
    {
        echo "チューナーをOFFにします\n";
    }

    public function setAm()
    {
        echo "AMラジオをセットします\n";
    }

    public function setFm()
    {
        echo "FMラジオをセットします\n";
    }

    public function setFrequency()
    {
        echo "周波数をセットします\n";
    }
}
