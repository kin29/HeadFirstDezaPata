<?php

namespace HFD\Adapter\Turkey;

class WildTurkey implements Turkey
{
	public function gobble(): void
	{
        echo "ゴロゴロ\n";
	}
	
	public function fly(): void
	{
        echo "短い距離を飛んでいます\n";
	}
}
