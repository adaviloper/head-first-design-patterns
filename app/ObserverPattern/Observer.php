<?php

namespace App\ObserverPattern;

interface Observer
{
    public function update(float $temperature, float $humidity, float $pressure);
}
