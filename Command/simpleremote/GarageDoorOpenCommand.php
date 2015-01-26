<?php

class GarageDoorOpenCommand implements Command {
    protected $garageDoor;

    public function __construct(GarageDoor $garageDoor) {
        $this->garageDoor = $garageDoor;
    }

    public function execute() {
        $this->garageDoor->up();
    }
}
 