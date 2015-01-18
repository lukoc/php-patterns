<?php
namespace Patterns\Adapter\Ducks;

class DuckAdapter implements Turkey {
    private $duck;
    private $rand;

    public function __construct(Duck $duck) {
        $this->duck = $duck;
        $this->rand = rand(1,10);
    }

    public function gobble() {
        $this->duck->quack();
    }

    public function fly() {
        if ($this->rand == 0) {
            $this->duck->fly();
        }
    }

}