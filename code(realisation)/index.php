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
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <nav  class="navBarContainer">
            <div>
                <section class="navbar w-100   bg-light d-flex flex-row  justify-content-evenly ">
                    <div >
                        
                        <img class="img" src="./img/logo.png">

                    </div>
                    <div class=' w-50 searchContainer '>
                        <input class="searchBar  rounded-3 border-1" type="search" name="search">
                        <input class="mb-1 ms-2 rounded-3 btn-md pt-0 searchButton btn btn-success" type="button" value="search">
                    </div>
                    <a class="btn  btn-md rounded-3 btn-success" href="logout.php">log out</a>



        </nav>
    </header>
    <main>
        <section>
            <div class='container mt-5 mb-5 w-75 '>
                        <a class="btn btn-success" href="insert.php">Add new Employee</a> 
            </div>
            <table class="container bg-light border broder-rounded w-75">
                
                <div class='tableTittles'>
                    <tr>
                        <th>Image</th>
                        <th>first name</th>
                        <th>last name</th>
                        <th>birthday</th>
                        <th>department</th>
                        <th>occupation</th>
                        <th>salary<th>
                        <th>action</th>

                    </tr> 
                <div>

                <?php
                foreach($data as $employee){

                
            ?>
                <div class="tableElements pt-2">
                    <tr>

                        <td></td>
                        <td><?php echo $employee->getfirstName()?></td>
                        <td><?php echo $employee->getlastName() ?></td>
                        <td><?php echo $employee->getAge() ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a class='btn btn-primary' href="edit.php?id=<?php echo $employee->getId() ?>">edit</a></td>
                        <td><a class='btn btn-danger' href="delete.php?id=<?php echo $employee->getId() ?>">delete</a></td>
                    
                    
                    </tr>      
                    <?php }?>
                <div>

            </table>
        </section>
    </main>
</body>
</html>