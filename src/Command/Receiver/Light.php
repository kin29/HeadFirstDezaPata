<?php

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
