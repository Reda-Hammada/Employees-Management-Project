<?php

include 'config.php';
include 'employees.php';
include 'employeesManager.php';


if(!empty($_POST)){

    $employee = new Employees();
    $employeeManager = new EmployeesManager();
    $firstName =  setfirstName($_POST['first_name']);
    $lastName = setlastName($_POST['last_name']);
    $age =  setAge($_POST['age']);


    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prorotype 3</title>
</head>
<body>
    <form method="post">
        <input type="text" name="frist_name">
        <input type ="text" name="last_name">
        <input type="text" name="age">
    </form>
</body>
</html>
