<?php

class GarageDoor {
    public function __construct() {

    }
    public function up() {
        echo "Garage Door is Open";
    }
    public function down() {
        echo "Garage Door is Closed";
    }
    public function stop() {
        echo "Garage Door is Stopped";
    }
    public function lightOn() {
        echo "Garage Door is on";
    }
    public function lightOff()
    {
        echo "Garage Door is off";
    }
}