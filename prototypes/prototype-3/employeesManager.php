<?php

class EmployeesManager{

    public function getAllEmployees($connectDB){

        $sqlGetData = "SELECT ID, 'first _name', 'last_name', 'age' FROM employees";
        $result = mysqli_query($connectDB, $sqlGetData);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }

    public function insertEmployees($connectDB, $employee){
            $firstName = $employee->getfirstName();
            $lastName = $employee->getlastName();
            $age = $employee->getAge();

            $insertDB = "INSERT INTO employees('first_name','last_name','age') VALUES('$firstName','$lastName','$age')";
            
            mysqli_query($connectDB,$insertDB);
    }
}



?>