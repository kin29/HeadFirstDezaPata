<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use HFD\Command\Command\CeilingFanHighCommand;
use HFD\Command\Command\CeilingFanMediumCommand;
use HFD\Command\Command\CeilingFanOffCommand;
use HFD\Command\Command\LightOffCommand;
use HFD\Command\Command\LightOnCommand;
use HFD\Command\Command\MacroCommand;
use HFD\Command\Receiver\CeilingFan;
use HFD\Command\Receiver\Light;
use HFD\Command\RemoteControl;

$light = new Light();
$lightOnCommand = new LightOnCommand($light);
$lightOffCommand = new LightOffCommand($light);
$remCon = new RemoteControl(2);
$remCon->setCommand(0, $lightOnCommand, $lightOffCommand);

$remCon->onButtonWasPushed(0);
$remCon->offButtonWasPushed(0);
$remCon->undoButtonPushed();

$ceilingFan = new CeilingFan();
$ceilingFanHighCommand = new CeilingFanHighCommand($ceilingFan);
$ceilingFanMediumCommand = new CeilingFanMediumCommand($ceilingFan);
$ceilingFanOffCommand = new CeilingFanOffCommand($ceilingFan);
$remCon->setCommand(1, $ceilingFanHighCommand, $ceilingFanOffCommand);
$remCon->setCommand(2, $ceilingFanMediumCommand, $ceilingFanOffCommand);

$remCon->onButtonWasPushed(2); //扇風機を「中」にする
$remCon->offButtonWasPushed(2); //扇風機を消す
$remCon->undoButtonPushed(); //扇風機が「中」に戻る
$remCon->onButtonWasPushed(1); //扇風機を「強」にする
$remCon->undoButtonPushed(); //扇風機が「中」に戻る

$partyOnCommands = [$lightOnCommand, $ceilingFanHighCommand];
$partyOffCommands = [$lightOffCommand, $ceilingFanOffCommand];
$partyOnCommand = new MacroCommand($partyOnCommands);
$partyOffCommand = new MacroCommand($partyOffCommands);
$remCon->setCommand(3, $partyOnCommand, $partyOffCommand);

echo "---マクロコマンド start---\n";
$remCon->onButtonWasPushed(3);
$remCon->offButtonWasPushed(3);
$remCon->undoButtonPushed();
echo "---マクロコマンド end---\n";
