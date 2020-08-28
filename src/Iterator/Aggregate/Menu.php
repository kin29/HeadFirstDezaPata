<?php

namespace HFD\Iterator\Aggregate;

use HFD\Iterator\Iterator\MenuIterator;

interface Menu
{
    public function createIterator(): MenuIterator;
}
