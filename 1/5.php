<?php
class Device {
    public $brand;
    public $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }
}

class Smartphone extends Device {
    public function call($number) {
        return "Calling {$number}...";
    }
}

class Laptop extends Device {
    public function code() {
        return "Coding on the laptop...";
    }
}

class Tablet extends Device {
    public function draw() {
        return "Drawing on the tablet...";
    }
}

// Пример использования
$smartphone = new Smartphone("Apple", "iPhone 13");
$laptop = new Laptop("Dell", "XPS 13");
$tablet = new Tablet("Samsung", "Galaxy Tab");

echo $smartphone->call("1234567890") . "<br>";
echo $laptop->code() . "<br>";
echo $tablet->draw() . "<br>";