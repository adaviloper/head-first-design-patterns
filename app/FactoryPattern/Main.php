<?php

namespace App\FactoryPattern;

use App\FactoryPattern\Factories\ChicagoPizzaFactory;
use App\FactoryPattern\Factories\NYPizzaFactory;
use App\FactoryPattern\Stores\CaliforniaPizzeria;
use App\FactoryPattern\Stores\NYPizzeria;

class Main
{
    public static function run(): void
    {
        $nyShop = new NYPizzeria();
        $chicagoShop = new CaliforniaPizzeria();

        $nyShop->orderPizza('cheese');
        echo "\n";
        $chicagoShop->orderPizza('cheese');

        exit();
    }
}
