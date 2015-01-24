<?php

class Soy extends CondimentDecorator {
    protected $beverage;

    public function __construct($beverage) {
        $this->beverage = $beverage;
    }

    public function getDescription() {
        return $this->beverage->getDescription() . ", Soy";
    }

    public function cost () {
        return 0.15 + $this->beverage->cost();
    }
}