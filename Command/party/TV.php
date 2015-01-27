<?php

namespace Patterns\Command\party;

class TV {

    protected $location;
    protected $channel;

    public function __construct($location) {
        $this->location = $location;
    }

    public function on() {
        echo $this->location . " TV is on";
    }

    public function off() {
        echo $this->location . " TV is off";
    }

    public function setInputChannel() {
        $this->channel = 3;
        echo $this->location . " TV channel is set for DVD";
    }


}
