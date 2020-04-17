<?php


namespace HFD\Strategy;


abstract class Duck
{
    /**
     * @var FlyBehavior
     */
    private $flyBehavior;

    /**
     * @var QuackBehavior
     */
    private $quackBehavior;

    public function display()
    {

    }

    public function swim()
    {

    }

    public function setFlyBehavior(FlyBehavior $fb)
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb)
    {
        $this->quackBehavior = $qb;
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }
}
