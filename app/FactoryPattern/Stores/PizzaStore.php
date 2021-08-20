<?php

namespace App\FactoryPattern\Stores;

use App\FactoryPattern\Pizzas\Pizza;

abstract class PizzaStore
{
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->toString();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    abstract public function createPizza(string $type): Pizza;
}
