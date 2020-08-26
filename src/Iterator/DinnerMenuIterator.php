<?php


namespace HFD\Iterator;


class DinnerMenuIterator implements MenuIterator
{
    /** @var  MenuItem[]*/
    private $items;
    /** @var int */
    private static $position = 0;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function hasNext(): bool
    {
        if (!isset($this->items[self::$position])) {
            return false;
        }

        return true;
    }

    public function next(): MenuItem
    {
        $menuItem = $this->items[self::$position];
        self::$position++;

        return $menuItem;
    }
}
