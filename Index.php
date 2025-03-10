<?php
require_once "FullTimeEmployee.php";
require_once "PartTimeEmployee.php";
require_once "ContractEmployee.php";


$employees = [
    new FullTimeEmployee("Lovelyn Malanot", 301, "Manager", 60000),
    new PartTimeEmployee("Miya Tabubuca", 302, "Receptionis", 200, 90),
    new ContractEmployee("Arlyn Udaundo", 303, "Designer", 80000),
    new FullTimeEmployee("Julie Ann Molina", 304, "Asisstant ", 45000),
    new PartTimeEmployee("Vince Arnedo", 105, "", 150, 90),
];


foreach ($employees as $employee) {
    echo $employee->getInfo() . "<br>";
    echo "Salary: " . $employee->getSalary() . "<br>";

    
    if ($employee instanceof Bonus) {
        echo "Bonus: " . $employee->calculateBonus() . "<br>";
    }
    echo "<br>";
}
?>
