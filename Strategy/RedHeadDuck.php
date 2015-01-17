<?php

class RedHeadDuck extends Duck
{

    public function __construct()
    {
        $this->setFlyBehavior(new FlyWithWings);
        $this->setQuackBehavior(new Quack);
    }

    public function display()
    {
        echo "I'm a real Red Headed duck";
    }
} 