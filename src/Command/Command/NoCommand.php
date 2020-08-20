<?php

declare(strict_types=1);

namespace HFD\Command\Command;

class NoCommand implements Command
{
    public function execute(): void
    {
        echo "何もしません\n";
    }

    public function undo(): void
    {
        echo "何もしません\n";
    }
}
