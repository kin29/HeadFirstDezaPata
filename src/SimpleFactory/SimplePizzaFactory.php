<?php

declare(strict_types=1);

namespace HFD\SimpleFactory;

use HFD\SimpleFactory\Pizza\CheesePizza;
use HFD\SimpleFactory\Pizza\ClamPizza;
use HFD\SimpleFactory\Pizza\GreekPizza;
use HFD\SimpleFactory\Pizza\Pizza;
use HFD\SimpleFactory\Pizza\VeggiePizza;

/**
 * Class SimplePizzaFactory
 *
 * ピザをの作成方法だけを扱うクラス
 * 具象Pizzaクラスを参照する唯一の部分
 */
class SimplePizzaFactory
{
    /**
     * @return Pizza $pizza
     */
    public function createPizza(string $type): Pizza
    {
        //変化する部分（オブジェクト作成）
        $pizza = null;
        if ($type == 'チーズ') {
            $pizza = new CheesePizza();
        } elseif ($type == 'クラム') {
            $pizza = new ClamPizza();
        } elseif ($type == '野菜') {
            $pizza = new VeggiePizza();
        } elseif ($type == 'ギリシャ') {
            $pizza = new GreekPizza();
        }

        return $pizza;
    }
}
