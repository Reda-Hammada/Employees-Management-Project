<?php
include'employeesManager.php';


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $employeeManager = new EmployeesManager();
    $employee = $employeeManager->getEmployeeById($id);

}

if(isset($_POST['modify'])){
    $id= $_GET['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$birthDay = $_POST['birthDay'];

$employeeManager->editEmployee($id,$firstName,$lastName,$birthDay);
header('location:index.php');




}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>
<body>
    <form method="post">
        <input type="text" name="firstName" value=<?php echo  $employee->getfirstName() ?>><br>
        <input type="text" name="lastName" value=<?php  echo $employee-> getlastName() ?>><br>
        <input type="date" name="birthDay" value=<?php echo  $employee->getbirthDay()?>><br>
        <input type="submit" value="modify" name="modify">
    </form>
</body>
</html>