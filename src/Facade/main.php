<?php

require __DIR__ . '/../../vendor/autoload.php';

use HFD\Facade\HomeTheaterFacade;
use HFD\Facade\Sub\Amplifier;
use HFD\Facade\Sub\Tuner;
use HFD\Facade\Sub\DvdPlayer;
use HFD\Facade\Sub\CdPlayer;
use HFD\Facade\Sub\Projecter;
use HFD\Facade\Sub\TheaterLights;
use HFD\Facade\Sub\Screen;
use HFD\Facade\Sub\PopcornPopper;


$amp = new Amplifier();
$tuner = new Tuner();
$dvd = new DvdPlayer();
$cd = new CdPlayer();
$projecter = new Projecter();
$theater = new TheaterLights();
$screen = new Screen();
$pop = new PopcornPopper();
$homeTheater = new HomeTheaterFacade(
	$amp,
	$tuner,
	$dvd,
	$cd,
	$projecter,
	$theater,
	$screen,
	$pop
);

$homeTheater->watchMovie('アナ雪');