<?php

namespace HFD\Command\Receiver;

class Light
{
    public function on()
    {
        echo "照明を点けました\n";
    }

    public function off()
    {
        echo "照明を消しました\n";
    }
}
