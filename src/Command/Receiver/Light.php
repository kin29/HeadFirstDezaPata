<?php

declare(strict_types=1);

namespace HFD\Command\Receiver;

class Light
{
    public function on(): void
    {
        echo "照明を点けました\n";
    }

    public function off(): void
    {
        echo "照明を消しました\n";
    }
}
