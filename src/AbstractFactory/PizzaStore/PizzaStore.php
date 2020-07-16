<?php

declare(strict_types=1);

namespace HFD\AbstractFactory\PizzaStore;

use HFD\AbstractFactory\Pizza\Pizza;

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
     *
     * @return Pizza $pizza
     */
    public function orderPizza(string $item): Pizza
    {
        $pizza = $this->createPizza($item);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    /**
     * ピザの作成方法(createPizzaメソッド)はサブクラスに任せる（変化する部分）
     * ＝FactoryMethod
     *
     * @return Pizza|null $pizza
     */
    abstract public function createPizza(string $item): ?Pizza;
}
