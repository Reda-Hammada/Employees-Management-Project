<?php
include 'config.php';
include 'employeesManager.php';
$employeeManager = new employeesManager();
$data = $employeeManager->getAllEmployees($connectDB);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="insert.php">Add new Employee</a>
    <table>

    <tr>
            <th>first name</th>
            <th>last name</th>
            <th>age</th>
        </tr> 
        <tr>

    <?php
    foreach($data as $employee){

    


    ?>
      
            <td><?php echo $employee['first_name'] ?></td>
            <td><?php echo $employee['last_name'] ?></td>
            <td><?php echo $employee['age'] ?></td>
         
        </tr>      
        <?php }?>
         
</table>
</body>
</html>