<?php

namespace HFD\Facade;

use HFD\Facade\SubSystem\Amplifier as Amplifier;
use HFD\Facade\SubSystem\Tuner as Tuner;
use HFD\Facade\SubSystem\DvdPlayer as DvdPlayer;
use HFD\Facade\SubSystem\CdPlayer as CdPlayer;
use HFD\Facade\SubSystem\Projector as Projector;
use HFD\Facade\SubSystem\TheaterLights as TheaterLights;
use HFD\Facade\SubSystem\Screen as Screen;
use HFD\Facade\SubSystem\PopcornPopper as PopcornPopper;

/**
 * Class HomeTheaterFacade
 *
 * @package HFD
 */
class HomeTheaterFacade
{
    public $amp;
    public $tuner;
    public $dvd;
    public $cd;
    public $projector;
    public $screen;
    public $light;
    public $popper;

    public function __construct(
        Amplifier $amp,
        Tuner $tuner,
        DvdPlayer $dvd,
        CdPlayer $cd,
        Projector $projector,
        Screen $screen,
        TheaterLights $light,
        PopcornPopper $popper
    )
    {
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projector = $projector;
        $this->screen = $screen;
        $this->light = $light;
        $this->popper = $popper;
    }

    public function watchMovie(string $movie): void
    {
        echo "▶︎ 映画を見る準備をします！\n";
        $this->popper->on();
        $this->popper->pop();
        $this->light->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setDvd($this->dvd);
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);
        $this->dvd->on();
        $this->dvd->play($movie);
    }

    public function endMovie(): void
    {
        echo "▶︎ 映画を終了します。\n";
        $this->popper->off();
        $this->light->on();
        $this->screen->up();
        $this->projector->off();
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
