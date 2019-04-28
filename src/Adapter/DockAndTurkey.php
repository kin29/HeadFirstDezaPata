<?php

declare(strict_types=1);

namespace HFD\Adapter;

use HFD\Adapter\Dock\Dock;
use HFD\Adapter\Turkey\Turkey;

interface DockAndTurkey extends Dock, Turkey
{
}
