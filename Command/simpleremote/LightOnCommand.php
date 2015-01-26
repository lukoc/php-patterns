<?php

class LightOnCommand implements Command {
    protected $light;

    public function LightOffCommand(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->on();
    }
}
 