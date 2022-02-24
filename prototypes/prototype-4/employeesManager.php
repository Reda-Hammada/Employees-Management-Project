<?php

include 'employees.php';

class EmployeesManager {

    public function insertEmployee($employee){
        $getJSON = file_get_contents('employees.json');
        $JSONarray = json_decode($getJSON);

        $employeeData = array(

            'id'=> $employee->getId(),
            'First name' => $employee -> getfirstName(),
            'Last name' => $employee ->  getlastName(),
            'birth day' => $employee -> getbirthDay()
        );

        array_push($JSONarray, $employeeData);
        file_put_contents('employees.json', json_encode($JSONarray));
       
    }


    public function getEmployee(){

        
    }


}


?>