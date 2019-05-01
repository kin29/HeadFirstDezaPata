<?php

declare(strict_types=1);

namespace HFD\TemplateMethod;

abstract class AbstractClass
{
    public function templateMethod(): void
    {
        $this->primitiveOperation1();
        $this->primitiveOperation2();
    }

    //それぞれ異なる手順→サブクラスにまかせる
    abstract public function primitiveOperation1();

    public function primitiveOperation2(): void
    {
        //共通の手順
    }
}
