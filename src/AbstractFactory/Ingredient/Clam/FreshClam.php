<?php

namespace HFD\AbstractFactory\Ingredient\Clam;

class FreshClam implements ClamInterface
{
    /**
     * @var string $name
     */
    private $name;

    public function __construct()
    {
        $this->name = "新鮮な貝";
    }

    public function getName(): string
    {
        return $this->name;
    }
}
