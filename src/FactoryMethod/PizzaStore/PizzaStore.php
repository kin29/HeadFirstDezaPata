<?php

declare(strict_types=1);

namespace HFD\FactoryMethod\PizzaStore;

/**
 * Class PizzaStore
 *
 * 地域スタイル用のPizzaStoreサブクラスの抽象クラス
 * ピザの作成方法(createPizzaメソッド)はサブクラスに任せる
 */
abstract class PizzaStore
{
    /**
     * この部分はどんなサブクラスでも一貫性を保証したい。（変化しない部分）
     */
    public function orderPizza(string $type): object
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    /**
     * ピザの作成方法(createPizzaメソッド)はサブクラスに任せる（変化する部分）
     */
    abstract public function createPizza(string $type): object;
}
