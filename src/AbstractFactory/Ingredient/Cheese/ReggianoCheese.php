<?php

namespace HFD\AbstractFactory\Ingredient\Cheese;

class ReggianoCheese implements CheeseInterface
{
    /**
     * @var string $name
     */
    private $name;

    public function __construct()
    {
        $this->name = "レジャーノピザ";
    }

    public function getName(): string
    {
        return $this->name;
    }
}
