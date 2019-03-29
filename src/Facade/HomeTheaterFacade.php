<?php

namespace HED\Facade;

use HFD\Facade\Sub\Amplifier;
use HFD\Facade\Sub\Tuner;
use HFD\Facade\Sub\DvdPlayer;
use HFD\Facade\Sub\CdPlayer;
use HFD\Facade\Sub\Projecter;
use HFD\Facade\Sub\TheaterLights;
use HFD\Facade\Sub\Screen;
use HFD\Facade\Sub\PopcornPopper;

class HomeTheaterFacade
{
	public $amp;
	public $tuner;
	public $dvd;
	public $cd;
	public $projecter;
	public $screen;
	public $light;
	public $popper;

	public function __constract(
		Amplifier $amp,
		Tuner $tuner,
		DvdPlayer $dvd,
		CdPlayer $cd,
		Projecter $projecter,
		Screen $screen,
		TheaterLights $light,
		PopcornPopper $popper
	)
	{
		$this->amp = $amp;
		$this->tuner = $tuner;
		$this->dvd = $dvd;
		$this->cd = $cd;
		$this->projecter = $projecter;
		$this->screen = $screen;
		$this->light = $light;
		$this->popper = $popper;
	}

	public function watchMovie(string $movie): void
	{
		echo "映画を見る準備をします。\n";
		$this->popper->on();
		$this->popper->pop();
		$this->light->dim(10);
		$this->screen->down();
		$this->projecter->on();
		$this->projecter->wideScreenMode();
		$this->amp->on();
		$this->amp->setDvd($$this->dvd);
		$this->amp->setSurroundSound();
		$this->amp->setVolume(5);
		$this->dvd->on();
		$this->dvd->play($movie);
	}

	public function endhMovie(): void
	{
		echo "映画を停止します。\n";
		$this->popper->off();
		$this->light->on();
		$this->screen->up();
		$this->projecter->off();
		$this->amp->off();
		$this->dvd->stop();
		$this->dvd->eject();
		$this->dvd->off();

	}

	public function listenToCd(): void
	{
		//
	}

	public function endCd(): void
	{
		//
	}

	public function listenToRadio(): void
	{
		//
	}

	public function endRadio(): void
	{
		//
	}
}