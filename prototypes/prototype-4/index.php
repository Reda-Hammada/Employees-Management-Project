<?php
include'employeesManager.php';
$employeeManager = new EmployeesManager();
$dataEmployee = $employeeManager->getEmployee();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>
<body>

                     
    <table>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>age</th>
        </tr>

        
        <?php
        foreach($dataEmployee as $data){
                    

        ?>

        <tr>
            <td><?php echo  $data->getfirstName()   ?></td>
            <td><?php echo $data->getlastName()   ?></td>
            <td><?php echo $data->getbirthDay()  ?></td>
        </tr>

                

    </table>
    <?php } ?>
</body>
</html>