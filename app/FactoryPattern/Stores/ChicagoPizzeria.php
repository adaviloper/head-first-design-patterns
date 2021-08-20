<?php

namespace App\FactoryPattern\Stores;

use App\FactoryPattern\Factories\ChicagoPizzaIngredientFactory;
use App\FactoryPattern\Pizzas\Chicago\ChicagoStyleCheesePizza;
use App\FactoryPattern\Pizzas\Chicago\ChicagoStyleClamPizza;
use App\FactoryPattern\Pizzas\Chicago\ChicagoStylePepperoniPizza;
use App\FactoryPattern\Pizzas\Chicago\ChicagoStyleVeggiePizza;
use App\FactoryPattern\Pizzas\Pizza;

class ChicagoPizzeria extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        $pizza = [
            'cheese' => ChicagoStyleCheesePizza::class,
            'pepperoni' => ChicagoStylePepperoniPizza::class,
            'clam' => ChicagoStyleClamPizza::class,
            'veggies' => ChicagoStyleVeggiePizza::class,
        ][$type];

        return new $pizza($ingredientFactory);
    }
}
