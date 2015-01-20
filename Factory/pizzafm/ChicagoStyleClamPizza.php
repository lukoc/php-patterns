<?php
namespace Patterns\Factory\PizzaFM;

class ChicagoStyleClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "Chicago Style Clam Pizza";
        $this->dough = "Extra Thick Crust Dough";
        $this->sauce = "Plum Tomato Sauce";

        array_push($this->toppings, "Shredded Mozzarella Cheese");
        array_push($this->toppings, "Frozen Clams from Chesapeake Bay");
    }

    protected function cut()
    {
        echo "Cutting the pizza into square slices";
    }
}
 