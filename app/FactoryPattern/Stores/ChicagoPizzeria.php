<?php

namespace App\FactoryPattern\Stores;

use App\FactoryPattern\Factories\CaliforniaPizzaIngredientFactory;
use App\FactoryPattern\Pizzas\Chicago\ChicagoStyleCheesePizza;
use App\FactoryPattern\Pizzas\Chicago\ChicagoStyleClamPizza;
use App\FactoryPattern\Pizzas\Chicago\ChicagoStylePepperoniPizza;
use App\FactoryPattern\Pizzas\Chicago\ChicagoStyleVeggiePizza;
use App\FactoryPattern\Pizzas\Pizza;

class ChicagoPizzeria extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        $ingredientFactory = new CaliforniaPizzaIngredientFactory();

        if ($type === 'cheese') {
            return  new ChicagoStyleCheesePizza($ingredientFactory);
        }

        if ($type === 'pepperoni') {
            return  new ChicagoStylePepperoniPizza($ingredientFactory);
        }

        if ($type === 'clam') {
            return  new ChicagoStyleClamPizza($ingredientFactory);
        }

        if ($type === 'veggie') {
            return  new ChicagoStyleVeggiePizza($ingredientFactory);
        }
    }
}
