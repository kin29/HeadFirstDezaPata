<?php

namespace HFD\SimpleFactory;

use HFD\SimpleFactory\Pizza\Pizza;

/**
 * Class PizzaStore
 *
 * ファクトリのクライアント
 * SimplePizzaFactoryを介して、ピザをインスタンス取得します
 *
 * @package HFD
 */
class PizzaStore
{
    /**
     * @var SimplePizzaFactory $factory
     */
    public $factory;

    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * orderPizzaメソッドは「ギリシャピザやクラムピザなどの具象pizza」については知らなくて良い。
     * 「pizzaインターフェースを実装したピザを取得し、
     * prepareメソッド,bakeメソッド,...を呼び出せる」ことを知ってるだけで良い。
     *
     * @param string $type
     * @return Pizza $pizza
     */
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->factory->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    public function delivery(): void
    {
        echo "配達します\n";
    }
}
