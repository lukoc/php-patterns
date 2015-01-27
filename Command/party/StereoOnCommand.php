<?php

namespace Patterns\Command\party;

class StereoOnCommand implements Command {
    protected $stereo;

    public function __construct($stereo) {
        $this->stereo = $stereo;
    }

    public function execute() {
        $this->stereo->on();
    }

    public function undo() {
        $this->stereo->off();
    }
}