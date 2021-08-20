<?php

namespace App\FactoryPattern;

use App\FactoryPattern\Stores\CaliforniaPizzeria;
use App\FactoryPattern\Stores\ChicagoPizzeria;
use App\FactoryPattern\Stores\NYPizzeria;

class Main
{
    public static function run(): void
    {
        $nyShop = new NYPizzeria();
        $chicagoShop = new ChicagoPizzeria();
        $californiaShop = new CaliforniaPizzeria();

        $nyShop->orderPizza('veggies');
        echo "\n";
        $chicagoShop->orderPizza('veggies');
        echo "\n";
        $californiaShop->orderPizza('veggies');

        exit();
    }
}
