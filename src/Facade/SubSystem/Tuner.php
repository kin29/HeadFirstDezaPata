<?php

declare(strict_types=1);

namespace HFD\Facade\SubSystem;

use HFD\Facade\SubSystem\Amplifier as Amplifier;

class Tuner
{
    public $amp;

    public function __construct(Amplifier $amp)
    {
        $this->amp = $amp;
    }

    public function on(): void
    {
        echo "チューナーをONにします\n";
    }

    public function off(): void
    {
        echo "チューナーをOFFにします\n";
    }

    public function setAm(): void
    {
        echo "AMラジオをセットします\n";
    }

    public function setFm(): void
    {
        echo "FMラジオをセットします\n";
    }

    public function setFrequency(): void
    {
        echo "周波数をセットします\n";
    }
}
