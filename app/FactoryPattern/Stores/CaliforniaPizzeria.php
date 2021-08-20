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
        if ($type === 'cheese') {
            return  new CaliforniaStyleCheesePizza($ingredientFactory);
        }

        if ($type === 'pepperoni') {
            return  new CaliforniaStylePepperoniPizza($ingredientFactory);
        }

        if ($type === 'clam') {
            return  new CaliforniaStyleClamPizza($ingredientFactory);
        }

        if ($type === 'veggie') {
            return  new CaliforniaStyleVeggiePizza($ingredientFactory);
        }
    }
}
