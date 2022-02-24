<?php

include('employeesManager.php');

if(isset($_GET['id'])){

$id = $_GET['id'];
$employeeManager = new EmployeesManager();
$employeeManager->deleteEmployee($id);


}





?>