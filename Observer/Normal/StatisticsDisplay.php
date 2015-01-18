<?php

class StatisticsDisplay implements Observer, DisplayElement
{
    private $maxTemp = 0;
    private $minTemp = 200;
    private $tempSum = 0;
    private $numReadings;
    private $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update($temp, $humidity, $pressure)
    {
        $this->tempSum += $temp;
        $this->numReadings++;
        if ($temp > $this->maxTemp) {
            $this->maxTemp = $temp;
        }
        if ($temp < $this->minTemp) {
            $this->minTemp = $temp;
        }

        $this->display();
    }

    public function display()
    {
        echo "Avg/Max/Min temperature = " . ($this->tempSum / $this->numReadings)
            . "/" . $this->maxTemp . "/" . $this->minTemp . "<br>";
    }
}