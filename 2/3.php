<?php
class Thermostat {
    private $temperature;

    public function setTemperature($temperature) {
        if ($temperature >= 0 && $temperature <= 38) {
            $this->temperature = $temperature;
        }
    }

    public function getTemperature() {
        return $this->temperature;
    }
}

// Пример использования
$thermostat = new Thermostat();
$thermostat->setTemperature(25);
echo $thermostat->getTemperature(); // 25