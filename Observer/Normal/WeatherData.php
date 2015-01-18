<?php

class WeatherData implements Subject
{
    private $observers;
    private $temperature;
    private $humidity;
    private $pressure;

    public function __construct()
    {
        $this->observers = array();
    }

    public function registerObserver($o)
    {
        array_push($this->observers, $o);
    }

    public function removeObserver($o)
    {
        if (($key = array_search($o, $this->observers)) !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObservers()
    {
        for ($i = 0; $i < count($this->observers); $i++) {
            $this->observers[$i]->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    public function getHumidity()
    {
        return $this->humidity;
    }

    public function getPressure()
    {
        return $this->pressure;
    }

}
 