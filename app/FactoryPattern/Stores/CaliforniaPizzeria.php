<?php

namespace App\FactoryPattern\Stores;

use App\FactoryPattern\Factories\CaliforniaPizzaIngredientFactory;
use App\FactoryPattern\Pizzas\California\CaliforniaStyleCheesePizza;
use App\FactoryPattern\Pizzas\California\CaliforniaStyleClamPizza;
use App\FactoryPattern\Pizzas\California\CaliforniaStylePepperoniPizza;
use App\FactoryPattern\Pizzas\California\CaliforniaStyleVeggiePizza;
use App\FactoryPattern\Pizzas\Pizza;

class CaliforniaPizzeria extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        $ingredientFactory = new CaliforniaPizzaIngredientFactory();

        $pizza = [
            'cheese' => CaliforniaStyleCheesePizza::class,
            'pepperoni' => CaliforniaStylePepperoniPizza::class,
            'clam' => CaliforniaStyleClamPizza::class,
            'veggies' => CaliforniaStyleVeggiePizza::class,
        ][$type];

        return new $pizza($ingredientFactory);
    }
}
