<?php
namespace Patterns\Adapter\Ducks;

class TurkeyAdapter implements Duck {
    private $turkey;

    public function __construct(Turkey $turkey) {
        $this->turkey = $turkey;
    }

    public function quack() {
        $this->turkey->gobble();
    }

    public function fly() {
        for ($i = 0; $i < 4; $i ++) {
            $this->turkey->fly();
        }
    }
}
 