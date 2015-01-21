<?php
namespace Patterns\Factory\PizzaFM;

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = array();

    public function prepare()
    {
        echo "Preparing " . $this->name;
        echo "Tossing dough...";
        echo "Adding sauce...";
        echo "Adding toppings: ";
        for ($i = 0; $i < count($this->toppings); $i++) {
            echo "  " . $this->toppings[$i];
        }
    }

    public function bake()
    {
        echo "Bake for 25 minutes at 350";
    }

    public function cut()
    {
        echo "Cutting the pizza into diagonal slices";
    }

    public function box()
    {
        echo "Place pizza in official PizzaStore box";
    }

    public function getName()
    {
        return $this->name;
    }

    public function toString()
    {
        $display = "";
        $display .= "---- " . $this->name . " ----<br>";
        $display .= $this->dough . "<br>";
        $display .= $this->sauce . "<br>";
        for ($i = 0; $i < count($this->toppings); $i++) {
            $display .= $this->toppings[$i] . "<br>";
        }
        return $display;
    }

}
 