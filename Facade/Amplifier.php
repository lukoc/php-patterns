<?php

class Amplifier {
    protected $description;
    protected $tuner;
    protected $dvd;
    protected $cd;

    public function __construct($description) {
        $this->description = $description;
    }

    public function on() {
        echo $this->description . " on";
    }
    public function off() {
        echo $this->description . " off";
    }
    public function setStereoSound() {
        echo $this->description . " stereo mode on";
    }
    public function setSurroundSound() {
        echo $this->description . " surround sound on (5 speakers, 1 subwoofer)";
    }
    public function setVolume($level) {
        echo $this->description . " setting volumen to " . $level;
    }
    public function setTuner(Tuner $tuner) {
        echo $this->description . " setting tuner to " . $tuner->toString();
    }
    public function setDvd (DvdPlayer $dvd) {
        echo $this->description . " setting DVD player to " . $dvd->toString();
     }
    public function setCd(CdPlayer $cd) {
        echo $this->description . " setting CD player to " . $cd->toString();
    }
    public function toString() {
        return $this->description;
    }
}