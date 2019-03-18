<?php

namespace HFD\Command\Command;

interface Command
{
    public function execute(): void;

    public function undo(): void;
}
