<?php
include 'employeesManager.php';

$employeeManager = new EmployeesManager();
if(isset($_GET['id'])){

   $employee =  $employeeManager->getById($_GET['id']);


}

if(isset($_POST['modify'])){
    $file =  $_FILES['image']['name'];
    $employee = new Employees();
    $employee->setId($_POST['id']);
    $employee->setfirstName($_POST['firstName']);
    $employee->setlastName($_POST['lastName']);
    $employee->setAge($_POST['age']);
    $employee->setDepartment($_POST['department']);
    $employee->setOccupation($_POST['occupation']);
    $employee->setSalary($_POST['salary']);
    $salary = $_POST['salary'];
    $tempaname = $_FILES["image"]["tmp_name"];
    if(!empty($file)){

        $employee->setImage($file);
        $employeeManager->uploadImage($file, $tempaname);

    }
    else {

        $employee->setImage($employee->getImage());
    }

    $employeeManager->modifyEmployee($employee, $id);
    header('location:index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Edit Employee Information</title>
    
    
</head>

<body>
    <header>
        <nav  class="navBarContainer">
            <div>
                <section class="navbar w-100   bg-light d-flex flex-row  justify-content-evenly ">
                    <div >
                        
                        <a class="cursor-pointer" href="index.php"><img class="img" src="./img/logo.png"></a>

                    </div>
                   
                    <a class="btn   btn-md rounded-3 btn-success" href="logout.php">log out</a>



        </nav>
    </header>
        <main>

            <section id="replaceClass" class=" editForm  w-100 ">
                <div  class="  w-100  h-75 bg-white">
                    <form  method="post" class="w-100  h-75 bg-white" enctype="multipart/form-data">
                        <input type="hidden"  class="d-block form-control w-50 mt-2" name="id" value=<?php echo $employee->getId() ?>><br>
                        <input type="text" name="firstName"  class="d-block form-control w-50 mt-2" value=<?php echo $employee->getfirstName()  ?>><br>
                        <input type="text"  name="lastName"  class="d-block form-control w-50 mt-2"  value=<?php echo $employee->getlastName()  ?>><br>
                        <input type="date" class="d-block form-control w-50 mt-2"  name="age" value= <?php echo $employee->getAge()?>><br>
                        <select class="d-block form-select-md form-select w-50 mt-2" name="department"  value="<?php echo $employee->getDepartment() ?>">
                            <option class="dropdown-item"> <?php echo $employee->getDepartment() ?></option>
                            <option class="dropdown-item" value="Marketing">Marketing</option>
                            <option class="dropdown-item" value="IT">IT</option>
                            <option class="dropdown-item" value="Finance">Finance</option>
                            <option class="dropdown-item" value="Accounting">Accounting</option>
                            <option class="dropdown-item" value="HR">HR</option>
                        </select>
                        <input class="d-block form-control w-50 mt-2" type="text" name="occupation"  placeholder="occupation" required  value=<?php echo $employee->getOccupation() ?>>
                        <input class="d-block form-control w-50 mt-2" type="text" name="salary" placeholder="salary" required  value=<?php echo $employee->getSalary() ?>>
                        <input class="form-control w-50 mt-2" type="file" name="image"  value=<?php echo $employee->getImage() ?>>
                        <div class="buttonContainer mt-2">
                            <input class=" buttonModify btn-md d-inline btn btn-success mt-2 mb-2 ms-2  " type="submit" value="modify" name="modify" >
                            <a href="index.php" class=" buttonCancel btn btn-danger mt-2 mb-2 border rounded-2">Cancel</a>
                        </div>
                        
                        
                    
                    </form>
            </div>
        </section>
    </main>
</body>
</html>