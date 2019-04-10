<?php

namespace HFD\Facade\SubSystem;

class PopcornPopper
{
    public function on()
    {
        echo "ボップコーンマシーンをONにします\n";
    }

    public function off()
    {
        echo "ボップコーンマシーンをOFFにします\n";
    }

    public function pop()
    {
        echo "ボップコーンを作ります\n";
    }
}
