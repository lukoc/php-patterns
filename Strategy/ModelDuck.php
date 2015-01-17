<?php

class ModelDuck extends Duck
{
    public function ModelDuck()
    {
        $this->setFlyBehavior(new FlyNoWay);
        $this->setQuackBehavior(new Quack);
    }

    public function display()
    {
        echo "I'm a model duck";
    }
}