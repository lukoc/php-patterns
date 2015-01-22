<?php
namespace Patterns\Factory\PizzaAF;

class ClamPizza extends Pizza {
    protected $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory) {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare() {
        echo "Preparing" . $this->name;
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->clam = $this->ingredientFactory->createClam();
    }
}