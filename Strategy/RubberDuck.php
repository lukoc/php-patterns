<?php

class RubberDuck extends Duck
{

    public function __construct()
    {
        $this->setFlyBehavior(new FlyNoWay);
        $this->setQuackBehavior(new Squeak);
    }

    public function display()
    {
        echo "I'm a rubber duckie";
    }
}