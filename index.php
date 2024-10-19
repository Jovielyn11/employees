<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Classes</title>
</head>
<body>

<?php
class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }
}

class Manager extends Employee {
    private $department;

    public function __construct($name, $salary, $department) {
        parent::__construct($name, $salary);
        $this->department = $department;
    }

    public function displayDetails() {
        echo "Manager: " . $this->getName() . ", Salary: " . $this->getSalary() . ", Department: " . $this->department . "<br>";
    }
}

class Developer extends Employee {
    private $programmingLanguage;

    public function __construct($name, $salary, $programmingLanguage) {
        parent::__construct($name, $salary);
        $this->programmingLanguage = $programmingLanguage;
    }

    public function displayDetails() {
        echo "Developer: " . $this->getName() . ", Salary: " . $this->getSalary() . ", Language: " . $this->programmingLanguage . "<br>";
    }
}

$manager = new Manager("Jake", 10000, "Sales");
$developer = new Developer("Shaun", 60000, "JS");

$manager->displayDetails();
$developer->displayDetails();

 