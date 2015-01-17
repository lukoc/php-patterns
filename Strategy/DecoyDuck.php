<?php

class DecoyDuck extends Duck
{

    public function __construct()
    {
        $this->setFlyBehavior(new FlyNoWay);
        $this->setQuackBehavior(new MuteQuack);
    }

    public function display()
    {
        echo "I'm a duck Decoy";
    }

} 