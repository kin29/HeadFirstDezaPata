<?php

declare(strict_types=1);

namespace HFD\AbstractFactory\Ingredient\Veggies;

class MushRoom implements VeggieInterface
{
    /**
     * @var string
     */
    private $name;

    public function __construct()
    {
        $this->name = 'マッシュルーム';
    }

    public function getName(): string
    {
        return $this->name;
    }
}
