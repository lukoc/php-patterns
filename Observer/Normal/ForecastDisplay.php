<?php

class ForecastDisplay implements Observer, DisplayElement
{
    private $currentPressure = 29.92;
    private $lastPressure;
    private $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update($temp, $humidity, $pressure)
    {
        $this->lastPressure = $pressure;
        $this->currentPressure = $pressure;

        $this->display();
    }

    public function display()
    {
        echo "Forecast: ";
        if ($this->currentPressure > $this->lastPressure) {
            echo "Improving weather on the way!";
        } else {
            if ($this->currentPressure == $this->lastPressure) {
                echo "More of the same";
            } else {
                if ($this->currentPressure < $this->lastPressure) {
                    echo "Watch out for cooler, rainy weather";
                }
            }
        }
        echo "<br>";
    }
}
 