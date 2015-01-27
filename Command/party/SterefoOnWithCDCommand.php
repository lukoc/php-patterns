<?php

namespace Patterns\Command\party;

class StereoOnWithCDCommand implements Command {
    protected $stereo;

    public function __construct($stereo) {
        $this->stereo = $stereo;
    }

    public function execute() {
        $this->stereo->on();
        $this->stereo->setCD();
        $this->stereo->setVolume(11);
    }

    public function undo() {
        $this->stereo->off();
    }
}
 