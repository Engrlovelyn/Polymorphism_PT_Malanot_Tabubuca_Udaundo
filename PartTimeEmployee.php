<?php
require_once "Employee.php";
require_once "Bonus.php";

class PartTimeEmployee extends Employee implements Bonus {
    private $hourlyRate;
    private $hoursWorked;

    public function __construct($name, $id, $position, $hourlyRate, $hoursWorked) {
        parent::__construct($name, $id, $position);
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }

    public function getSalary() {
        return $this->hourlyRate * $this->hoursWorked;
    }

    public function calculateBonus() {
        return $this->getSalary() * 0.05;
    }
}
?>
