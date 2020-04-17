<?php


declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

//マガモ
$mallard = new \HFD\Strategy\MallardDuck();
$mallard->setFlyBehavior(new \HFD\Strategy\FlyWithWings());
$mallard->setQuackBehavior(new \HFD\Strategy\Quack());
$mallard->performFly();   //鴨の飛ぶ振る舞い
$mallard->performQuack(); //鴨の鳴く振る舞い

//ゴム製の鴨
$rubberDuck = new \HFD\Strategy\RubberDuck();
$rubberDuck->setFlyBehavior(new \HFD\Strategy\FlyNoWay());
$rubberDuck->setQuackBehavior(new \HFD\Strategy\Squack());
$rubberDuck->performFly();   //飛べない
$rubberDuck->performQuack(); //キューという音を出す


