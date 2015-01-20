<?php
namespace Patterns\Factory\PizzaFM;

class NYStyleClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "NY Style Clam Pizza";
        $this->dough = "Thin Crust Dough";
        $this->sauce = "Marinara Sauce";

        array_push($this->toppings, "Grated Reggiano Cheese");
        array_push($this->toppings, "Fresh Clams from Long Island Sound");
    }
}
 