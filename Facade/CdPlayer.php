<?php

class CdPlayer {
    protected $description;
    protected $currentTrack;
    protected $amplifier;
    protected $title;

    public function __construct($description , Amplifier $amplifier) {
        $this->description = $description;
        $this->amplifier = $amplifier;
    }

    public function on() {
        echo $this->description . " on";
    }

    public function off() {
        echo $this->description . " off";
    }

    public function eject() {
        $this->title = null;
        echo $this->description . " eject";
    }

    public function play($title) {
        $this->title = $title;
        $this->currentTrack = 0;
        echo $this->description . " playing \"" . $this->title . "\"";
    }
    public function playTrack($track) {
        if ($this->title === null ) {
            echo $this->description . " can't play track " . $this->currentTrack;
        } else {
            $this->currentTrack = $track;
            echo $this->description . " playing track" . $this->currentTrack;
        }
    }
    public function stop() {
        $this->currentTrack = 0;
        echo $this->description . " stopped";
    }

    public function pause() {
        echo $this->description . " paused \"" . $this->title . "\"";
    }

    public function toString() {
        return $this->description;
    }

}


 