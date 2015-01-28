<?php

class Hottub {
	protected $on;
	protected $temperature;

	public function __construct() {

	}

	public function on() {
		$this->on = true;
	}

	public function off() {
		$this->on = false;
	}

	public function circulate() {
		if ($this->on) {
			echo "Hottub is bubbling!";
		}
	}

	public function jetsOn() {
		if ($this->on) {
			echo "Hottub jets are on";
		}
	}

	public function jestOff() {
		if ($this->on) {
			echo "Hottub jets are off";
		}
	}

	public function setTemperature($temperature) {
		if ($temperature > $this->temperature) {
			echo "Hottub is heating to a steaming " . $temperature . " degrees";

		} else {
			echo "Hottub is cooling to " . $temperature . " degrees";

		}

		$this->temperature = $temperature;
	}
}