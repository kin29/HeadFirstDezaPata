<?php

namespace HFD\AbstractFactory\Ingredient\Veggies;

class RedPepper implements VeggieInterface
{
    /**
     * @var string
     */
    private $name;

    public function __construct()
    {
        $this->name = "レッドペッパー";
    }

    public function getName(): string
    {
        return $this->name;
    }
}
