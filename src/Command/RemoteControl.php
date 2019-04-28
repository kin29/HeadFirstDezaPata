<?php

declare(strict_types=1);

namespace HFD\Command;

use HFD\Command\Command\Command;
use HFD\Command\Command\NoCommand;

class RemoteControl
{
    /**
     * @var Command[]
     */
    public $onCommands;

    /**
     * @var Command[]
     */
    public $offCommands;

    /**
     * @var Command
     */
    public $undoCommand;

    public function __construct(int $commandCnt)
    {
        for ($i = 0; $i < $commandCnt; $i++) {
            $this->onCommands[] = new NoCommand();
            $this->offCommands[] = new NoCommand();
        }
        $this->undoCommand = new NoCommand();
    }

    public function setCommand(int $slotNum, Command $onCommand, Command $offCommand): void
    {
        $this->onCommands[$slotNum] = $onCommand;
        $this->offCommands[$slotNum] = $offCommand;
    }

    public function onButtonWasPushed(int $slotNum): void
    {
        $this->onCommands[$slotNum]->execute();
        $this->undoCommand = $this->onCommands[$slotNum];
    }

    public function offButtonWasPushed(int $slotNum): void
    {
        $this->offCommands[$slotNum]->execute();
        $this->undoCommand = $this->offCommands[$slotNum];
    }

    public function undoButtonPushed(): void
    {
        $this->undoCommand->undo();
    }
}
