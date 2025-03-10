<?php
require_once "Employee.php";
require_once "Bonus.php";

class FullTimeEmployee extends Employee implements Bonus {
    private $monthlySalary;

    public function __construct($name, $id, $position, $monthlySalary) {
        parent::__construct($name, $id, $position);
        $this->monthlySalary = $monthlySalary;
    }

    public function getSalary() {
        return $this->monthlySalary;
    }

    public function calculateBonus() {
        return $this->monthlySalary * 0.10;
    }
}
?>
