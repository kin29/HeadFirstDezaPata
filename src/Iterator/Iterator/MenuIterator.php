<?php

namespace HFD\Iterator\Iterator;

interface MenuIterator
{
    public function hasNext(): bool;
    public function next();
}
