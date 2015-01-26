<?php

$remote = new SimpleRemoteControl();
$light = new Light();
$garageDoor = new GarageDoor();
$lightOn = new LightOnCommand($light);
$garageOpen = new GarageDoorOpenCommand($garageDoor);

$remote->setCommand($lightOn);
$remote->buttonWasPressed();
$remote->setCommand($garageOpen);
$remote->buttonWasPressed();
 