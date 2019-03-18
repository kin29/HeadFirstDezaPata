<?php

require __DIR__ . '/../../vendor/autoload.php';

use HFD\Command\Command\LightOnCommand;
use HFD\Command\Command\LightOffCommand;
use HFD\Command\Receiver\Light;
use HFD\Command\RemoteControl;


$lightOnCommand = new LightOnCommand(new Light());
$lightOffCommand = new LightOffCommand(new Light());
$remCon = new RemoteControl(2);
$remCon->setCommand(0, $lightOnCommand, $lightOffCommand);

$remCon->onButtonWasPushed(0);
$remCon->offButtonWasPushed(0);
$remCon->undoButtonPushed();
