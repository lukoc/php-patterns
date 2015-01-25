<?php

 class Projector {
     protected $description;
     protected $dvdPlayer;

     public function __construct($description , DvdPlayer $dvdPlayer) {
         $this->description = $description;
         $this->dvdPlayer = $dvdPlayer;
     }

     public function on() {
         echo $this->description . " on";
     }

     public function off() {
         echo $this->description . " off";
     }

     public function wideScreenMode() {
         echo $this->description . " in widescreen mode (16x9 aspect ratio)";
     }

     public function tvMode() {
         echo $this->description . " in tv mode (4x3 aspect ratio)";
     }

     public function toString() {
         return $this->description;
     }
 }