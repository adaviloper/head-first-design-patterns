<?php

namespace App\ObserverPattern;

class WeatherStation
{
    public static function init()
    {
        $weatherData = new WeatherData();
        $currentDisplay = new CurrentConditionsDisplay($weatherData);
        $statisticsDisplay = new StatisticsDisplay($weatherData);
        $forecastDisplay = new ForecastDisplay($weatherData);

        $weatherData->registerObserver($currentDisplay);
        $weatherData->registerObserver($statisticsDisplay);
        $weatherData->registerObserver($forecastDisplay);

        $weatherData->setMeasurements(80, 65, 30.4);
        $weatherData->setMeasurements(82, 70, 29.2);
        $weatherData->setMeasurements(78, 90, 29.2);
    }
}
