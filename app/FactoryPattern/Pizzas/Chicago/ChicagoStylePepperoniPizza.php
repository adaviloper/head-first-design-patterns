<?php

namespace App\FactoryPattern\Pizzas\Chicago;

use App\FactoryPattern\Factories\PizzaIngredientFactory;
use App\FactoryPattern\Pizzas\Pizza;

class ChicagoStylePepperoniPizza extends Pizza
{
    protected $name = 'Chicago Style Pepperoni Pizza';

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        parent::__construct();
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare(): void
    {
        echo "Preparing {$this->name}\n";
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->pepperoni = $this->ingredientFactory->createPepperoni();
    }
}
