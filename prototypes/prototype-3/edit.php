<?php
include 'employeesManager.php';

$employeeManager = new employeesManager();

if(isset($_GET['id'])){

    $employeeManager->getById($_GET['id']);


}

if(isset($_POST[''])){

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee Information</title>
</head>

<body>
    <h1> <?php echo "Modify" . " " .$employe->getfirstName() . $employee->getlastName()  . " " . "infromation" ?> </h1>
    <form method="post">
        <input type="text name="firstName" value=<?php echo $employee->getfirstName() ?>>
        <input type="text name="lastName"  value=<?php echo $employee->getlastName() ?>>
        <input type="text name="age" value= <?php echo $employee->getAge() ?>>
    </form>
    
</body>
</html>