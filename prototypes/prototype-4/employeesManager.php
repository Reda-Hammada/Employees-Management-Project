<?php

include 'employees.php';

class EmployeesManager {

    public function insertEmployee($employee){
        $getJSON = file_get_contents('employees.json');
        $JSONarray = json_decode($getJSON);

        $employeeData = array(

            'id'=> $employee->getId(),
            'First_name' => $employee -> getfirstName(),
            'Last_name' => $employee ->  getlastName(),
            'birth_day' => $employee -> getbirthDay()
        );

        array_push($JSONarray, $employeeData);
        file_put_contents('employees.json', json_encode($JSONarray));
       
    }


    public function getEmployee(){

        $file = file_get_contents('employees.json');
        $employee_data = json_decode($file);
        $employeeArray = array();
        foreach($employee_data as $data){
            $employee = new Employees();
            $employee->setId($data->id);
            $employee->setfirstName($data[1]);
            $employee->setlastName($data[2]);
            $employee->setbirthDay($data[3]);

            array_push($employeeArray,$employee);
        }

        return $employee;

        
    }


}


?>