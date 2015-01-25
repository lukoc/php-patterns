<?php

class Screen {
    private $description;

    public function __construct($description) {
        $this->description = $description;
    }

    public function up() {
        echo $this->description . " going up";
    }

    public function down() {
        echo $this->description . "going down";
    }

    public function toString() {
        return $this->description;
    }
}