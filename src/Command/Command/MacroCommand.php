<?php


namespace HFD\Command\Command;


class MacroCommand implements Command
{
    private $commands;

    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function execute(): void
    {
        /** @var Command $command */
        foreach($this->commands as $command){
            $command->execute();
        }
    }

    public function undo(): void
    {
        /** @var Command $command */
        foreach($this->commands as $command){
            $command->undo();
        }
    }
}
