<?php
class Employee {
    protected $name;
    protected $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function displayDetails() {
        echo "Name: " . $this->name . "\n";
        echo "Salary: $" . $this->salary . "\n";
    }
}

class Manager extends Employee {
    private $department;

    public function __construct($name, $salary, $department) {
        parent::__construct($name, $salary);
        $this->department = $department;
    }

    public function displayDetails() {
        parent::displayDetails();
        echo "Department: " . $this->department . "\n";
    }
}

$employee = new Employee("Alice", 50000);
$employee->displayDetails();

echo "\n";

$manager = new Manager("Bob", 70000, "IT");
$manager->displayDetails();

