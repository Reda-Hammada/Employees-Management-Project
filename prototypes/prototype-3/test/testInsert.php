<?php 
include "../employeesManager.php";

$employee = new Employees;
$employee->setfirstName('reda');
$employee->setlastName('hammada');
$employee->setBirthDate('2000/05/24');

$employeeManager = new EmployeesManager();
$employeeManager->insertEmployee($employee);
?>