<?php

declare(strict_types=1);

namespace HFD\Facade\SubSystem;

use HFD\Facade\SubSystem\Amplifier as Amplifier;

class DvdPlayer
{
    public $amp;
    public $name;

    public function __construct(Amplifier $amp)
    {
        $this->amp = $amp;
        $this->name = 'DVDプレーヤ';
    }

    public function __toString(): string
    {
        return "{$this->name}";
    }

    public function on(): void
    {
        echo "DVDプレーヤーをONにします\n";
    }

    public function off(): void
    {
        echo "DVDプレーヤーをOFFにします\n";
    }

    public function eject(): void
    {
        echo "DVDを取り除きます\n";
    }

    public function pause(): void
    {
        echo "DVDを一時停止します\n";
    }

    public function play(string $movie): void
    {
        echo "DVD「{$movie}」をスタートします\n";
    }

    public function setSurroundAudio(): void
    {
        echo "DVDのサラウンドオーディオをセットします\n";
    }

    public function setTwoChannelAudio(): void
    {
        echo "DVDの2chオーディオをセットします\n";
    }

    public function stop(): void
    {
        echo "DVDをストップします\n";
    }
}
