<?php

namespace HFD\Command\Command;

class NoCommand implements Command
{
    public function execute(): void
    {
        //何もしない
    }

    public function undo(): void
    {
        //何もしない
    }
}
