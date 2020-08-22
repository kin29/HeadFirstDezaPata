<?php

declare(strict_types=1);

namespace HFD\Facade\SubSystem;

class Screen
{
    public function up(): void
    {
        echo "スクリーンを上げてしまいます\n";
    }

    public function down(): void
    {
        echo "スクリーンを下げてセットします\n";
    }
}
