<?php

namespace HFD\Iterator;

interface Menu
{
    public function createIterator(): MenuIterator;
}
