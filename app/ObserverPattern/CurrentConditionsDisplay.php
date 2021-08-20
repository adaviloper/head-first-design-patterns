<?php

namespace App\ObserverPattern;

class CurrentConditionsDisplay implements DisplayElement, Observer
{
    /** @var float $temperature */
    private $temperature;

    /** @var float $humidity */
    private $humidity;

    /**
     * @var WeatherData
     */
    private $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
    }

    public function update(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display()
    {
        echo "Current condiations: {$this->temperature}F degrees and {$this->humidity}% humidity.\n";
    }
}
