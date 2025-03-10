<?php
require_once "Employee.php";

class ContractEmployee extends Employee {
    private $contractAmount;

    public function __construct($name, $id, $position, $contractAmount) {
        parent::__construct($name, $id, $position);
        $this->contractAmount = $contractAmount;
    }

    public function getSalary() {
        return $this->contractAmount;
    }
}
?>
