<?php

class Tuner {
    protected $description;
    protected $amplifier;
    protected $frequency;

    public function __construct($description ,Amplifier $amplifier) {
        $this->description = $description;
    }

    public function on() {
        echo $this->description . " on";
    }

    public function off() {
        echo $this->description . " off";
    }

    public function setFrequency ($frequency) {
        echo $this->description . " setting frequency to " . $frequency;
        $this->frequency = $frequency;
    }

    public function setAm() {
        echo $this->description . " setting AM mode";
    }

    public function setFm() {
        echo $this->description . " setting FM mode";
    }

    public function toString() {
        return $this->description;
    }
}
 