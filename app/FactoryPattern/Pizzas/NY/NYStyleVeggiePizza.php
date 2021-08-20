<?php

namespace App\FactoryPattern\Pizzas\NY;

use App\FactoryPattern\Factories\PizzaIngredientFactory;
use App\FactoryPattern\Pizzas\Pizza;

class NYStyleVeggiePizza extends Pizza
{
    protected $name = 'NY Style Veggie Pizza';

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
        $this->toppings = $this->ingredientFactory->createVeggies();
    }
}
