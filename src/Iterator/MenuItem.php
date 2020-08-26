<?php

namespace HFD\Iterator;

class MenuItem
{
    private $name;
    private $description;
    private $vegetarian;
    private $price;

    public function __construct(string $name, string $description, bool $vegetarian, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    public function __toString(): string
    {
        return "$this->name($$this->price) -- $this->description";
    }
}
