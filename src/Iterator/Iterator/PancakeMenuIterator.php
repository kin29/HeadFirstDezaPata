<?php

namespace HFD\Iterator\Iterator;

class PancakeMenuIterator implements MenuIterator
{
    /** @var false|string[]  */
    private $items;
    /** @var int */
    private static $position = 0;

    public function __construct(string $items)
    {
        $this->items = explode('\n', $items);
    }

    public function hasNext(): bool
    {
        if (!isset($this->items[self::$position])) {
            return false;
        }

        return true;
    }

    public function next(): string
    {
        $menuItem = $this->items[self::$position];
        self::$position++;

        return $menuItem;
    }
}
