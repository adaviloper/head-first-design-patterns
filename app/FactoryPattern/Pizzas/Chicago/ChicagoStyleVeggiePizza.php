<?php

namespace App\FactoryPattern\Pizzas\Chicago;

use App\FactoryPattern\Factories\PizzaIngredientFactory;
use App\FactoryPattern\Pizzas\Pizza;

class ChicagoStyleVeggiePizza extends Pizza
{
    protected $name = 'Chicago Style Veggie Pizza';

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare(): void
    {
        echo "Preparing {$this->name}\n";
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->veggies = $this->ingredientFactory->createVeggies();
    }
}
