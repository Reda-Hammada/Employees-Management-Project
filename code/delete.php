<?php
include 'employeesManager.php';
 
if(isset($_GET['id'])){

    $employeeManager =  new EmployeesManager();
    $id = $_GET['id'];
    $employeeManager->deleteEmployee($id);
    
    header('location:index.php');
}

?>