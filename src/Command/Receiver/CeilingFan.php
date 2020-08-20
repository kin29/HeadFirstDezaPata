<?php

declare(strict_types=1);

namespace HFD\Command\Receiver;

class CeilingFan
{
    /** @var int  */
    const HIGH = 3;
    const MEDIUM = 2;
    const LOW = 1;
    const OFF = 0;
    private $speed;

    public function __construct()
    {
        $this->speed = self::OFF;
    }

    public function high(): void
    {
        $this->speed = self::HIGH;
        echo "扇風機を「強」にしました\n";
    }

    public function medium(): void
    {
        $this->speed = self::MEDIUM;
        echo "扇風機を「中」にしました\n";
    }

    public function low(): void
    {
        $this->speed = self::LOW;
        echo "扇風機を「弱」にしました\n";
    }

    public function off(): void
    {
        $this->speed = self::OFF;
        echo "扇風機を消しました\n";
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }
}
