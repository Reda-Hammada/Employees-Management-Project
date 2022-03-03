<?php
include "employees.php";
$employee = new Employee();
$employee->setFirstName("Reda");
echo $employee->getFirstName();

?>