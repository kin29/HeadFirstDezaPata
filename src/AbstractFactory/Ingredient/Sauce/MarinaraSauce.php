<?php

namespace HFD\AbstractFactory\Ingredient\Sauce;

class MarinaraSauce implements SauceInterface
{
    /**
     * @var string
     */
    private $name;

    public function __construct()
    {
        $this->name = "マリナラソース";
    }

    public function getName(): string
    {
        return $this->name;
    }
}