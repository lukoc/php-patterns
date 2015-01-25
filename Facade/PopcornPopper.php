<?php

 class PopcornPopper {
     protected $description;

     public function __construct($description) {
         $this->description = $description;
     }

     public function on() {
         echo $this->description . " on";
     }

     public function off() {
         echo $this->description . " off";
     }

     public function pop() {
         echo $this->description . " popping popcorn";
     }

     public function toString() {
         return $this->description;
     }
 }