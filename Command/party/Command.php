<?php

namespace Patterns\Command\party;

interface Command {
    public function execute();
    public function undo();
}