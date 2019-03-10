<?php

namespace HFD\AbstractFactory\Ingredient\Dough;

class ThinCrustDough implements DoughInterface
{
    /**
     * @var string
     */
    private $name;

    public function __construct()
    {
        $this->name = "うっすい生地";
    }

    public function getName(): string
    {
        return $this->name;
    }
}
