<?php

namespace App\FactoryPattern\Factories;

use App\FactoryPattern\Ingredients\Cheese;
use App\FactoryPattern\Ingredients\Clam;
use App\FactoryPattern\Ingredients\Dough;
use App\FactoryPattern\Ingredients\FreshClam;
use App\FactoryPattern\Ingredients\Garlic;
use App\FactoryPattern\Ingredients\MarinaraSauce;
use App\FactoryPattern\Ingredients\Mushroom;
use App\FactoryPattern\Ingredients\Onion;
use App\FactoryPattern\Ingredients\Pepperoni;
use App\FactoryPattern\Ingredients\RedPepper;
use App\FactoryPattern\Ingredients\ReggianoCheese;
use App\FactoryPattern\Ingredients\Sauce;
use App\FactoryPattern\Ingredients\SlicedPepperoni;
use App\FactoryPattern\Ingredients\ThinCrustDough;
use App\FactoryPattern\Ingredients\Veggies;

class CaliforniaPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper(),
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clam
    {
        return new FreshClam();
    }
}
