<?php
include 'employeesManager.php';
$employeeManager = new employeesManager();
if(isset($_GET['id'])){

    $employeeManager->getById($_GET['id']);


}

?>