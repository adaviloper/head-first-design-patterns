<?php

namespace App\FactoryPattern\Pizzas;

use App\FactoryPattern\Factories\PizzaIngredientFactory;
use App\FactoryPattern\Ingredients\Cheese;
use App\FactoryPattern\Ingredients\Clam;
use App\FactoryPattern\Ingredients\Pepperoni;
use App\FactoryPattern\Ingredients\Veggies;

abstract class Pizza
{
    /** @var PizzaIngredientFactory $ingredientFactory */
    protected $ingredientFactory;

    /** @var string $name */
    protected $name;

    /** @var string $dough */
    protected $dough;

    /** @var string $sauce */
    protected $sauce;

    /** @var array $toppings */
    protected $toppings = [];

    /** @var Veggies[] $veggies */
    protected $veggies = [];

    /** @var Cheese $cheese */
    protected $cheese;

    /** @var Pepperoni $pepperoni */
    protected $pepperoni;

    /** @var Clam $clam */
    protected $clam;

    abstract public function prepare(): void;

    public function bake(): void
    {
        echo "Bake for 25 minutes at 350\n";
    }

    public function cut(): void
    {
        echo "Cutting the pizza into diagonal slices\n";
    }

    public function box(): void
    {
        echo "Place pizza in official PizzaStore box\n";
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function toString(): void
    {
        echo "Preparing {$this->name}\n";
        echo "Tossing dough...\n";
        echo "Adding sauce...\n";
        echo "Adding toppings...\n";
        foreach ($this->toppings as $topping) {
            echo "\t{$topping}\n";
        }
    }
}
