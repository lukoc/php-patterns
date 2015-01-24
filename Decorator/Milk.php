<?php

class Milk extends CondimentDecorator {
    protected $beverage;

    public function __construct($beverage) {
        $this->beverage = $beverage;
    }

    public function getDescription() {
        return $this->beverage->getDescription() . ", Milk";
    }

    public function cost () {
        return 0.10 + $this->beverage->cost();
    }
}