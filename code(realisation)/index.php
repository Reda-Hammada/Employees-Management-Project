<?php

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
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <nav  class="container-fluids">
            <div class=>
                <section class="sideNavBar h-100 ">

                    <a>Table</a>
                    <a>add  employee</a>     

                </section>
                <section class="topNavBar  bg-light p1 col-12 row align-items-start">
                    <div class='col'>
                        
                        <img class="img" src="./img/logo.png">

                    </div>
                    <div class='col'>
                        <input type="search" name="search">
                        <input class="btn btn-success" type="button" value="search">
                    <div>
                    <div class='col d-inline'>
                        <a class="btn btn-success" href="logout.php">log out</a>
                    </div>
                </section>
            
            
            <div>

        </nav>
    </header>
    <main>
        <section>
            <table>
                <?php  include 'session.php'; ?>
                <a class="btn btn-success" href="insert.php">Add new Employee</a> 

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
        </section>
    </main>
</body>
</html>