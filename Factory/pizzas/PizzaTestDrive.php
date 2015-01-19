<?php

require_once "autoloader.php";

$factory = new SimplePizzaFactory();
$store = new PizzaStore($factory);

$pizza = $store->orderPizza("cheese");
echo "We ordered a " . $pizza->getName() . "<br>";

$pizza = $store->orderPizza("veggie");
echo "We ordered a " . $pizza->getName() . "<br>";

