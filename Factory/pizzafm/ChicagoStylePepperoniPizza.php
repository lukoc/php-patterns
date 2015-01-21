<?php
namespace Patterns\Factory\PizzaFM;

class ChicagoStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "Chicago Style Pepperoni Pizza";
        $this->dough = "Extra Thick Crust Dough";
        $this->sauce = "Plum Tomato Sauce";

        array_push($this->toppings, "Shredded Mozzarella Cheese");
        array_push($this->toppings, "Black Olives");
        array_push($this->toppings, "Spinach");
        array_push($this->toppings, "Eggplant");
        array_push($this->toppings, "Sliced Pepperoni");
    }

    public function cut()
    {
        echo "Cutting the pizza into square slices";
    }
}
 