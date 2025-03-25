<?php
class Animal {
    public function eat() {
        return "Eating...";
    }

    public function sleep() {
        return "Sleeping...";
    }
}

class Bird extends Animal {
    public function fly() {
        return "Flying...";
    }
}

class Fish extends Animal {
    public function swim() {
        return "Swimming...";
    }
}

class Mammal extends Animal {
    public function walk() {
        return "Walking...";
    }
}

// Пример использования
$parrot = new Bird();
$salmon = new Fish();
$lion = new Mammal();

echo $parrot->eat() . "<br>" . $parrot->fly() . "<br>";
echo $salmon->eat() . "<br>" . $salmon->swim() . "<br>";
echo $lion->eat() . "<br>" . $lion->walk() . "<br>";