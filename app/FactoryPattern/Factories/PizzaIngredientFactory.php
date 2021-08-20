<?php

namespace App\FactoryPattern\Factories;

use App\FactoryPattern\Ingredients\Cheese;
use App\FactoryPattern\Ingredients\Clam;
use App\FactoryPattern\Ingredients\Dough;
use App\FactoryPattern\Ingredients\Pepperoni;
use App\FactoryPattern\Ingredients\Sauce;
use App\FactoryPattern\Ingredients\Veggies;
use Illuminate\Support\Collection;

interface PizzaIngredientFactory
{
    public function createDough(): Dough;

    public function createSauce(): Sauce;

    public function createCheese(): Cheese;

    public function createVeggies(): Collection;

    public function createPepperoni(): Pepperoni;

    public function createClam(): Clam;
}
