<?php

namespace HFD\Command\Command;

use HFD\Command\Receiver\Light as Light;

class LightOffCommand implements Command
{
    /* @var Light $light */
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->off();
    }

    public function undo(): void
    {
        $this->light->on();
    }
}
