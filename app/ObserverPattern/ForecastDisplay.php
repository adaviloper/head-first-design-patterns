<?php

namespace App\ObserverPattern;

class ForecastDisplay implements DisplayElement, Observer
{
    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
    }

    public function display()
    {
        // TODO: Implement display() method.
    }

    public function update(float $temperature, float $humidity, float $pressure)
    {
        // TODO: Implement update() method.
    }
}
