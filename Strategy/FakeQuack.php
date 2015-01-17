<?php

class FakeQuack implements QuackBehavior
{
    public function quack()
    {
        echo "Qwak";
    }

}