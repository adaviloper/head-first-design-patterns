<?php

namespace App\FactoryPattern\Pizzas;

use App\FactoryPattern\Factories\PizzaIngredientFactory;
use App\FactoryPattern\Ingredients\Cheese;
use App\FactoryPattern\Ingredients\Clam;
use App\FactoryPattern\Ingredients\Pepperoni;
use App\FactoryPattern\Ingredients\Veggies;
use Illuminate\Support\Collection;

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

    /** @var Collection $toppings */
    protected $toppings = [];

    /** @var Cheese $cheese */
    protected $cheese;

    /** @var Pepperoni $pepperoni */
    protected $pepperoni;

    /** @var Clam $clam */
    protected $clam;

    public function __construct()
    {
        $this->toppings = collect();
    }

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
        $this->toppings->each(function ($topping) {
            $toppingName = collect(explode('\\', get_class($topping)))
                ->last();
            echo "\t{$toppingName}\n";
        });
    }
}
