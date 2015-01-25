<?php

 class DvdPlayer {
    protected $description;
    protected $currentTrack;
    protected $amplifier;
    protected $movie;

     public function __construct($description, Amplifier $amplifier) {
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
         $this->movie = null;
         echo $this->description . " eject";
     }

     public function play($movie) {
         $this->movie = $movie;
         $this->currentTrack = 0;
         echo $this->description . " playing \"" . "\"";
     }

     public function playTrack($track) {
         if ($this->movie === null) {
             echo $this->description . " can't play track ". $track . " no dvd inserted";
         } else {
             $this->currentTrack = $track;
             echo $this->description . " playing track " . $this->currentTrack . " of \"" . $this->movie . "\"";
         }
     }

     public function stop() {
         $this->currentTrack = 0;
         echo $this->description . " stopped \"" . $this->movie . "\"";
     }

     public function pause() {
         echo $this->description . " paused \"" . $this->movie . "\"";
     }

     public function setTwoChannelAudio() {
         echo $this->description . " set two channel audio";
     }

     public function setSurroundAudio() {
         echo $this->description . " set surround audio";
     }

     public function toString() {
         return $this->description;
     }
 }