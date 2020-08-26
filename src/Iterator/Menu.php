<?php

namespace HFD\Iterator;

interface Menu
{
    public function addItem(string $name, string $description, bool $vegetarian, float $price): void;
}
