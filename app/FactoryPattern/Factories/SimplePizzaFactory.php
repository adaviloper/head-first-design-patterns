<?php

namespace App\FactoryPattern\Factories;

use App\FactoryPattern\Pizzas\Chicago\ChicagoStyleCheesePizza;
use App\FactoryPattern\Pizzas\Chicago\ChicagoStyleClamPizza;
use App\FactoryPattern\Pizzas\Chicago\ChicagoStylePepperoniPizza;
use App\FactoryPattern\Pizzas\Chicago\ChicagoStyleVeggiePizza;
use App\FactoryPattern\Pizzas\Pizza;

class SimplePizzaFactory
{
    public function createPizza(string $type): Pizza
    {
        if ($type === 'cheese') {
            return  new ChicagoStyleCheesePizza();
        }

        if ($type === 'pepperoni') {
            return  new ChicagoStylePepperoniPizza();
        }

        if ($type === 'clam') {
            return  new ChicagoStyleClamPizza();
        }

        if ($type === 'veggie') {
            return  new ChicagoStyleVeggiePizza();
        }
    }
}
