<?php

namespace Patterns\Command\party;

class TVOffCommand implements Command {
    protected $tv;

    public function __construct(TV $tv) {
        $this->tv = $tv;
    }

    public function execute() {
        $this->tv->off();
    }

    public function undo() {
        $this->tv->on();
    }
}