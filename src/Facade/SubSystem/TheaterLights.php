<?php

declare(strict_types=1);

namespace HFD\Facade\SubSystem;

class TheaterLights
{
    public function on(): void
    {
        echo "シアターライトをONにします\n";
    }

    public function off(): void
    {
        echo "シアターライトをOFFにします\n";
    }

    public function dim(int $level): void
    {
        echo "シアターライトを{$level}にします\n";
    }
}
