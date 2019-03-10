<?php

namespace HFD\AbstractFactory\Ingredient\Veggies;

class Onion implements VeggieInterface
{
    /**
     * @var string
     */
    private $name;

    public function __construct()
    {
        $this->name = "オニオン";
    }

    public function getName(): string
    {
        return $this->name;
    }
}
