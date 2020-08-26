<?php

namespace HFD\Iterator;

interface MenuIterator
{
    public function hasNext(): bool;
    public function next();
}
