<?php

namespace HFD\Command\Command;

class LightOffCommand implements Command
{
    private $light;

    public function __construct(object $light)
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
