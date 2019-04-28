<?php

namespace HFD\Facade\SubSystem;

class TheaterLights
{
    public function __construct()
    {

    }

    public function on()
    {
        echo "シアターライトをONにします\n";
    }

    public function off()
    {
        echo "シアターライトをOFFにします\n";
    }

    /**
     * @param int $level
     */
    public function dim(int $level)
    {
        echo "シアターライトを{$level}にします\n";
    }
}
