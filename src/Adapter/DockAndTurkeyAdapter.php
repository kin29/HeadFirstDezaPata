<?php

namespace HFD\Adapter;

use HFD\Adapter\Dock\Dock;
use HFD\Adapter\Turkey\Turkey;

class DockAndTurkeyAdapter implements DockAndTurkey
{
	/* @var Turkey $turkey */
	public $turkey;

    /* @var Dock $dock */
    public $dock;

	public function __construct($turkeyOrdock)
	{
        if($turkeyOrdock instanceof Turkey)  $this->turkey = $turkeyOrdock;
        if($turkeyOrdock instanceof Dock)  $this->dock = $turkeyOrdock;
	}

    public function quack(): void
    {
        $this->turkey->gobble();
    }

    public function gobble(): void
    {
        $this->dock->quack();
    }

    public function fly(): void
    {
        if($this->turkey !== null){
            for($i = 0; $i < 5; $i++){
                $this->turkey->fly();
            }
        } else {
            $this->dock->fly();           
        }
    }
}
