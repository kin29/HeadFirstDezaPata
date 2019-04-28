<?php

declare(strict_types=1);

namespace HFD\AbstractFactory\Ingredient\Cheese;

class ReggianoCheese implements CheeseInterface
{
    /**
     * @var string
     */
    private $name;

    public function __construct()
    {
        $this->name = 'レジャーノピザ';
    }

    public function getName(): string
    {
        return $this->name;
    }
}
