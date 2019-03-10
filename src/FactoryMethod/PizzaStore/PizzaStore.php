<?php

namespace HFD\FactoryMethod\PizzaStore;

/**
 * Class PizzaStore
 *
 * 地域スタイル用のPizzaStoreサブクラスの抽象クラス
 * ピザの作成方法(createPizzaメソッド)はサブクラスに任せる
 *
 * @package HFD\FactoryMethod
 */
abstract class PizzaStore
{
    /**
     * この部分はどんなサブクラスでも一貫性を保証したい。（変化しない部分）
     *
     * @param string $type
     * @return object
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
     *
     * @param string $type
     * @return object
     */
    public abstract function createPizza(string $type): object;
}
