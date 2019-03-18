<?php

namespace HFD\Command\Command;

class LightOnCommand implements Command
{
    private $light;

    public function __construct(object $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->on();
    }

    public function undo(): void
    {
        $this->light->off();
    }
}
