<?php

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

    public function __construct($commandCnt)
    {
        for ($i = 0; $i < $commandCnt; $i++) {
            $this->onCommands[] = new NoCommand();
            $this->offCommands[] = new NoCommand();
        }
        $this->undoCommand = new NoCommand();
    }

    public function setCommand($slotNum, $onCommand, $offCommand)
    {
        $this->onCommands[$slotNum] = $onCommand;
        $this->offCommands[$slotNum] = $offCommand;
    }

    public function onButtonWasPushed($slotNum)
    {
        $this->onCommands[$slotNum]->execute();
        $this->undoCommand = $this->onCommands[$slotNum];
    }

    public function offButtonWasPushed($slotNum)
    {
        $this->offCommands[$slotNum]->execute();
        $this->undoCommand = $this->offCommands[$slotNum];
    }

    public function undoButtonPushed()
    {
        $this->undoCommand->undo();
    }
}
