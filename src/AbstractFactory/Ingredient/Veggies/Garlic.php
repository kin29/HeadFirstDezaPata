<?php

namespace HFD\AbstractFactory\Ingredient\Veggies;

class Garlic implements VeggieInterface
{
    /**
     * @var string
     */
    private $name;

    public function __construct()
    {
        $this->name = "ガーリック";
    }

    public function getName(): string
    {
        return $this->name;
    }
}
