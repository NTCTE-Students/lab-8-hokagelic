<?php
class Employee {
    public $name;
    public $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getInfo() {
        return "{$this->name} earns {$this->salary}";
    }
}

class Manager extends Employee {
    public function manageTeam() {
        return "{$this->name} is managing the team.";
    }
}

class Developer extends Employee {
    public function writeCode() {
        return "{$this->name} is writing code.";
    }
}

class Designer extends Employee {
    public function design() {
        return "{$this->name} is designing.";
    }
}

// Пример использования
$manager = new Manager('Alice', 90000);
$developer = new Developer('Bob', 80000);
$designer = new Designer('Charlie', 70000);

echo $manager->getInfo() . "<br>" . $manager->manageTeam() . "<br>";
echo $developer->getInfo() . "<br>" . $developer->writeCode() . "<br>";
echo $designer->getInfo() . "<br>" . $designer->design() . "<br>";