<?php

declare(strict_types=1);

namespace HFD\Adapter\Dock;

interface Dock
{
    public function quack(): void;

    public function fly(): void;
}
