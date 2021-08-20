<?php

namespace App\FactoryPattern\Stores;

use App\FactoryPattern\Factories\CaliforniaPizzaIngredientFactory;
use App\FactoryPattern\Pizzas\NY\NYStyleCheesePizza;
use App\FactoryPattern\Pizzas\NY\NYStyleClamPizza;
use App\FactoryPattern\Pizzas\NY\NYStylePepperoniPizza;
use App\FactoryPattern\Pizzas\NY\NYStyleVeggiePizza;
use App\FactoryPattern\Pizzas\Pizza;

class NYPizzeria extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        $ingredientFactory = new CaliforniaPizzaIngredientFactory();

        $pizzaClass = [
            'cheese' => NYStyleCheesePizza::class,
            'pepperoni' => NYStylePepperoniPizza::class,
            'clam' => NYStyleClamPizza::class,
            'veggie' => NYStyleVeggiePizza::class,
        ][$type];

        return new $pizzaClass($ingredientFactory);
    }
}
