<?php

namespace HFD\Adapter;

use HFD\Adapter\Dock\Dock;
use HFD\Adapter\Turkey\Turkey;

class TurkeyAdapter implements Dock
{
	/* @var Turkey $turkey */
	public $turkey;

	public function __construct(Turkey $turkey)
	{
		$this->turkey = $turkey;
	}

    public function quack(): void
    {
        $this->turkey->gobble();
    }

    public function fly(): void
    {
    	for($i = 0; $i < 5; $i++){
            $this->turkey->fly();
    	}
    }
}
