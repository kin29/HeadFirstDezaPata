<?php

namespace HFD\Facade\SubSystem;

class Screen
{
    public function __construct()
    {

    }

    public function up()
    {
        echo "スクリーンを上げてしまいます\n";
    }

    public function down()
    {
        echo "スクリーンを下げてセットします\n";
    }
}
