<?php
include 'session.php';
include 'employeesManager.php';
$employeeManager = new employeesManager();
$data = $employeeManager->getAllEmployees();

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
    <header>
        <nav>
        
        </nav>
    </header>
    <table>
    <a href="insert.php">Add new Employee</a> 

        <tr>

            <th>first name</th>
            <th>last name</th>
            <th>birthday</th>
            <th>department</th>
            <th>occupation</th>
            <th>salary<th>

        </tr> 

    <?php
    foreach($data as $employee){

    
?>

<tr>

      
            <td><?php echo $employee->getfirstName()?></td>
            <td><?php echo $employee->getlastName() ?></td>
            <td><?php echo $employee->getAge() ?></td>
             <td><a href="edit.php?id=<?php echo $employee->getId() ?>">edit</a></td>
            <td><a href="delete.php?id=<?php echo $employee->getId() ?>">delete</a></td>
         
         
        </tr>      
        <?php }?>
         
</table>
</body>
</html>