<?php

include 'employeesManager.php';
$employeeManager = new employeesManager();
$data = $employeeManager->getAllEmployees();



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
        <section class='w-100  text-center mt-4'>
            <h1 class='text-success t-align'>Employees Management</h1>
        </section>
        <section>
            <div class='container mt-5 mb-5 w-100 '>
                <a class="btn btn-success" onclick="show()">Add new Employee</a> 
            </div>
            <table class="container bg-light border broder-rounded w-100 px-5">
                
                <div class='tableTittles ms-2'>
                    <tr class=''>
                        <th >Image</th>
                        <th>first name</th>
                        <th>last name</th>
                        <th>birthday</th>
                        <th>department</th>
                        <th>occupation</th>
                        <th>salary<th>
                        <th>Action</th>
                    </tr> 
                <div>

                <section class=' popupForm   ms-auto me-auto bg-light'>

                    <div class="close">x</div>

                    <div class="formContainer">
                        <form method="post"  " class="ms-5 me-50">
                            <input class="d-block form-control w-50 mt-2" type="text" name="first_name" required>
                            <input class="d-block form-control w-50 mt-2" type ="text" name="last_name" required>
                            <input class="d-block form-control w-50 mt-2" type="date" name="age" required>
                            <select class="d-block  dropdown-men w-50 mt-2" name="department">
                                <option class="dropdown-item"></option>
                                <option class="dropdown-item" value="Marketing">Marketing</option>
                                <option class="dropdown-item" value="IT">IT</option>
                                <option class="dropdown-item" value="Finance">Finance</option>
                                <option class="dropdown-item" value="Accounting">Accounting</option>
                                <option class="dropdown-item" value="HR">HR</option>
                            </select>
                                <input class="d-block form-control w-50 mt-2" type="text" name="occupation" required>
                                <input class="d-block form-control w-50 mt-2" type="text" name="salary" required>
                                <input class="d-block btn btn-success mt-2" type="submit"  value ="add">
                        </form>
                    </div>
                </section>

                <?php
                foreach($data as $employee){

                
            ?>
                <div class="tableElements mt-2">
                    <tr>

                        <td></td>
                        <td><?php echo $employee->getfirstName()?></td>
                        <td><?php echo $employee->getlastName() ?></td>
                        <td><?php echo $employee->getAge() ?></td>
                        <td>hdjqeqr</td>
                        <td>fafsasaasd</td>
                        <td>asdas</td>
                        <td><a class= ' mt-2 mb-2  btn btn-success' href="edit.php?id=<?php echo $employee->getId() ?>">edit</a></td>
                        <td><a class=' btn  mt-2 mb-2 btn-md btn-danger' href="delete.php?id=<?php echo $employee->getId() ?>">delete</a></td>
                    
                    
                    </tr>      
                    <?php }?>
                <div>

            </table>
        </section>
    </main>
    <script src="./script/app.js"></script>
</body>
</html>