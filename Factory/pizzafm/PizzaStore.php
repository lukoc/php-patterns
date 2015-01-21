<?php
namespace Patterns\Factory\PizzaFM;

abstract class PizzaStore
{
    abstract function createPizza($item);

    public function orderPizza($type)
    {
        $pizza = $this->createPizza($type);
        echo "--- Making a " . $pizza->getName() . " ---";
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }
}
 