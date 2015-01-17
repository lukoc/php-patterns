<?php

abstract class Duck
{
    protected $flyBehavior;
    protected $quackBehavior;

    public function __construct()
    {
    }

    public function setFlyBehavior($fb)
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior($qb)
    {
        $this->quackBehavior = $qb;
    }

    abstract function display();

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim()
    {
        echo "All duck float, even decoys!";
    }
} 