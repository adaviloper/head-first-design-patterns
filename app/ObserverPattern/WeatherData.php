<?php

namespace App\ObserverPattern;

use Illuminate\Support\Collection;

class WeatherData implements Subject
{
    /** @var float $temperature */
    protected $temperature;

    /** @var float $humidity */
    protected $humidity;

    /** @var float $pressure */
    protected $pressure;

    /** @var Collection<Observer> $observers */
    protected $observers;

    public function __construct()
    {
        $this->observers = collect();
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    // other methods
    public function registerObserver(Observer $observer)
    {
        $this->observers->push($observer);
    }

    public function removeObserver(Observer $observer)
    {
        $this->observers = $this->observers->reject(static function ($o) use ($observer) {
            return $o === $observer;
        });
    }

    public function notifyObservers()
    {
        $this->observers->each(function (Observer $observer) {
            $observer->update($this->getTemperature(), $this->getHumidity(), $this->getPressure());
        });
    }
}
