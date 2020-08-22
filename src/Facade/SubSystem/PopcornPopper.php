<?php

declare(strict_types=1);

namespace HFD\Facade\SubSystem;

class PopcornPopper
{
    public function on(): void
    {
        echo "ボップコーンマシーンをONにします\n";
    }

    public function off(): void
    {
        echo "ボップコーンマシーンをOFFにします\n";
    }

    public function pop(): void
    {
        echo "ボップコーンを作ります\n";
    }
}
