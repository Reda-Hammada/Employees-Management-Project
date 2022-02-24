<?php

include 'employeesManager.php';


if(!empty($_POST)){
    $employee = new Employees();
    $employeeManager = new EmployeesManager();
    $employee->setId(uniqid());
    $employee->setfirstName($_POST['firstName']);
    $employee->setlastName($_POST['lastName']);
    $employee->setbirdthDay($_POST['birthDay']);
    $employeeManager->insertEmployee($employee);
    header('location:index.php');
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert new employee</title>
</head>
<body>
    <form method="post">

            <input type="text" name="firstName" required>
            <input type="text" name="lastName" required>
            <input type="date" name="birthDay" required>
            <input type="submit" value="Add Employee">
    </form>
</body>
</html>