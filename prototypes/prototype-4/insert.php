<?php



if(!empty($_POST)){

    $employee = new Employees();
    $employee->setId()
    $employee->setfirstName($_POST['firstName']);
    $employee->setlastName($_POST['lastName']);
    $employee->setbirthDay($_POST['birthDay']);
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