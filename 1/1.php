<?php
class Vehicle {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getInfo() {
        return "{$this->year} {$this->make} {$this->model}";
    }
}

class Car extends Vehicle {
    public $doors;

    public function __construct($make, $model, $year, $doors) {
        parent::__construct($make, $model, $year);
        $this->doors = $doors;
    }

    public function getInfo() {
        return parent::getInfo() . ", Doors: {$this->doors}";
    }
}

class Bike extends Vehicle {
    public $type;

    public function __construct($make, $model, $year, $type) {
        parent::__construct($make, $model, $year);
        $this->type = $type;
    }

    public function getInfo() {
        return parent::getInfo() . ", Type: {$this->type}";
    }
}

class Truck extends Vehicle {
    public $loadCapacity;

    public function __construct($make, $model, $year, $loadCapacity) {
        parent::__construct($make, $model, $year);
        $this->loadCapacity = $loadCapacity;
    }

    public function getInfo() {
        return parent::getInfo() . ", Load Capacity: {$this->loadCapacity}";
    }
}

// Пример использования
$car = new Car('Toyota', 'Corolla', 2021, 4);
$bike = new Bike('Yamaha', 'YZF-R3', 2020, 'Sport');
$truck = new Truck('Ford', 'F-150', 2019, '1000kg');


echo $manager->getInfo() . "<br>" . $manager->manageTeam() . "<br>";
echo $developer->getInfo() . "<br>" . $developer->writeCode() . "<br>";
echo $designer->getInfo() . "<br>" . $designer->design() . "<br>";