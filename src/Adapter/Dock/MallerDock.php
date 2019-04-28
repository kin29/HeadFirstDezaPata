<?php

declare(strict_types=1);

namespace HFD\Adapter\Dock;

class MallerDock implements Dock
{
    public function quack(): void
    {
        echo "ガーガー\n";
    }

    public function fly(): void
    {
        echo "飛んでいます\n";
    }
}
