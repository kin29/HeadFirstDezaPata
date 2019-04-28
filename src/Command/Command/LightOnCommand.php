<?php

declare(strict_types=1);

namespace HFD\Command\Command;

use HFD\Command\Receiver\Light as Light;

class LightOnCommand implements Command
{
    /* @var Light $light */
    private $light;

    public function __construct(Light $light)
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
