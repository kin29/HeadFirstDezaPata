<?php

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

    public function on()
    {
        echo "DVDプレーヤーをONにします\n";
    }

    public function off()
    {
        echo "DVDプレーヤーをOFFにします\n";
    }

    public function eject()
    {
        echo "DVDを取り除きます\n";
    }

    public function pause()
    {
        echo "DVDを一時停止します\n";
    }

    public function play(string $movie)
    {
        echo "DVD「{$movie}」をスタートします\n";
    }

    public function setSurroundAudio()
    {
        echo "DVDのサラウンドオーディオをセットします\n";
    }

    public function setTwoChannelAudio()
    {
        echo "DVDの2chオーディオをセットします\n";
    }

    public function stop()
    {
        echo "DVDをストップします\n";
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "{$this->name}";
    }
}
