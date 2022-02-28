<?php

include 'employeesManager.php';


if(!empty($_POST)){

    $employee = new Employees();
    $employeeManager = new EmployeesManager();
    $employee->setfirstName($_POST['first_name']);
    $employee->setlastName($_POST['last_name']);
    $employee->setAge($_POST['age']);
    $employeeManager->insertEmployees($employee);

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
    <h1>Add an Employee</h1>
    <form method="post">
        <input type="text" name="first_name" required>
        <input type ="text" name="last_name" required>
        <input type="date" name="age" required>
        <input type="submit"  value ="add">
    </form>
</body>
</html>
