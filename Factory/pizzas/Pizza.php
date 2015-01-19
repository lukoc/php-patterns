<?php

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = array();

    public function getName()
    {
        return $this->name;
    }

    public function prepare()
    {
        echo "Preparing " . $this->name;
    }

    public function bake()
    {
        echo "Baking " . $this->name;
    }

    public function cut()
    {
        echo "Cutting " . $this->name;
    }

    public function box()
    {
        echo "Boxing " . $this->name;
    }

    public function toString()
    {
        $display = "";
        $display .= "---- " . $this->name . " ----<br>";
        $display .= $this->dough . "<br>";
        $display .= $this->sauce . "<br>";
        for ($i = 0; $i < sizeof($this->toppings); $i++) {
            $display .= $this->toppings[$i] . "<br>";
        }
        return $display;
    }
}