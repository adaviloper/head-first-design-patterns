<?php

namespace App\FactoryPattern\Stores;

use App\FactoryPattern\Factories\NYPizzaIngredientFactory;
use App\FactoryPattern\Pizzas\NY\NYStyleCheesePizza;
use App\FactoryPattern\Pizzas\NY\NYStyleClamPizza;
use App\FactoryPattern\Pizzas\NY\NYStylePepperoniPizza;
use App\FactoryPattern\Pizzas\NY\NYStyleVeggiePizza;
use App\FactoryPattern\Pizzas\Pizza;

class NYPizzeria extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        $ingredientFactory = new NYPizzaIngredientFactory();

        $pizzaClass = [
            'cheese' => NYStyleCheesePizza::class,
            'pepperoni' => NYStylePepperoniPizza::class,
            'clam' => NYStyleClamPizza::class,
            'veggies' => NYStyleVeggiePizza::class,
        ][$type];

        return new $pizzaClass($ingredientFactory);
    }
}
