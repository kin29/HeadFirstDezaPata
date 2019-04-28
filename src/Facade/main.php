<?php

require __DIR__ . '/../../vendor/autoload.php';

use HFD\Facade\HomeTheaterFacade;
use HFD\Facade\SubSystem\Amplifier as Amplifier;
use HFD\Facade\SubSystem\Tuner as Tuner;
use HFD\Facade\SubSystem\DvdPlayer as DvdPlayer;
use HFD\Facade\SubSystem\CdPlayer as CdPlayer;
use HFD\Facade\SubSystem\Projector as Projector;
use HFD\Facade\SubSystem\TheaterLights as TheaterLights;
use HFD\Facade\SubSystem\Screen as Screen;
use HFD\Facade\SubSystem\PopcornPopper as PopcornPopper;


$amp = new Amplifier();
$tuner = new Tuner($amp);
$dvd = new DvdPlayer($amp);
$cd = new CdPlayer($amp);
$projector = new Projector($dvd);
$screen = new Screen();
$light = new TheaterLights();
$pop = new PopcornPopper();

$homeTheater = new HomeTheaterFacade(
    $amp,
    $tuner,
    $dvd,
    $cd,
    $projector,
    $screen,
    $light,
    $pop
);

$homeTheater->watchMovie('アナ雪');
$homeTheater->endMovie();
