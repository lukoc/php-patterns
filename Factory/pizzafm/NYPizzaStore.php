<?php
namespace Patterns\Factory\PizzaFM;

class NYPizzaStore extends PizzaStore
{
    public function createPizza($item)
    {
        if ($item === "cheese") {
            return new NYStyleCheesePizza();
        } else {
            if ($item === "veggie") {
                return new NYStyleVeggiePizza();
            } else {
                if ($item === "clam") {
                    return new ChicagoStyleClamPizza();
                } else {
                    if ($item === "pepperoni") {
                        return new NYStylePepperoniPizza();
                    } else {
                        return null;
                    }
                }
            }
        }
    }

}
 