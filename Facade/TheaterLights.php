<?php

class TheaterLights {
    protected $description;

    public function __construct($description) {
        $this->description = $description;
    }

    public function on() {
        echo $this->description . " on";
    }

    public function off() {
        echo $this->description . " off";
    }

    public function dim($level) {
        echo $this->description . " dimming to " . $level . "%";
    }

    public function toString() {
        return $this->description;
    }
}
 